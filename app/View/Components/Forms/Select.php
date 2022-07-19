<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Select extends Component
{
    public $id;
    public $label;
    public  $optArray;
    public  $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $label, $optArray, $value=Null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->optArray = $optArray;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.select');
    }
}
