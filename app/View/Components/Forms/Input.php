<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{

    public $id;
    public $label;
    public  $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $label, $value=Null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
