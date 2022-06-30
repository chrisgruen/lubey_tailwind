<?php
namespace App\Http\Controllers;

use Alloc\Allocation;
use Alloc\AllocationAttendance;
use Alloc\Http\Controllers\Controller;
use Alloc\Lot;
use Alloc\LotBiddings;
use Alloc\Participation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllocationController extends Controller
{

    public function getDetails(Request $request, $allocationName)
    {
        $validationResult = array('has_errors' => false, "errors" => array());
        $attendance = null;
        $allocation = Allocation::query()->where('name', $allocationName)->with(['lots', 'biddings'])->first();
        if (!$allocation)
            return redirect()->route('bay.index');
        if (in_array($allocation->state, ['new', 'readyForPublish', 'publishInProgress']) && (int)$allocation->company_id !== (int)Auth::company_id()) {
            return redirect()->route('bay.index');
        }
        if ($allocation->state === 'published' && (int)$allocation->company_id !== (int)Auth::company_id()) {
            return view('allocation.details.alloc.publishedNotice', ['allocation' => $allocation]);
        }
        if ($allocation->state == 'new') {
            $validationResult = $allocation->validate($request);
        }

        foreach ($allocation->lots as $key => $val) {
            $val->rank = null;
            if (in_array($allocation->state, ['qualified', 'running', 'post_qualification', 'post_qualified', 'awarded', 'granted', 'canceled'])) {
                $participating_ids = Participation::where('lot_id', $val->id)->get()->pluck('company_id')->toArray();
            }
            if (Auth::check() && Auth::company_id() == $allocation->company_id) {
                if (in_array($allocation->state, ['qualified', 'running', 'post_qualification', 'post_qualified', 'awarded', 'granted', 'canceled'])) {
                    $val->bidders = LotBiddings::query()->where('lot_id', $val->id)->whereIn('company_id', $participating_ids)->groupBy('company_id')->get()->count();
                } else {
                    $val->bidders = LotBiddings::query()->where('lot_id', $val->id)->groupBy('company_id')->get()->count();
                }
            } elseif (Auth::check() && Auth::id()) {
                $val->bidders = 0;
                $val->rank = Lot::evalBids($val)['rank'];
            } else {
                $val->bidders = 0;
            }
        }
        $attendance = AllocationAttendance::query()->with(['members'])->where('allocation_id', $allocation->id)->where('company_id', Auth::company_id())->first();
//        return view('bay.debug');
        return view('allocation.details.alloc.detail', [
            'allocation' => $allocation,
            'lots' => $allocation->lots->sortBy('sort_order'),
            'favorite' => false,
            'validationResult' => (object)$validationResult,
            'biddingDisabled' => false,
            'attendance' => $attendance,
            'step' => 'lots',
        ]);
    }
}
