<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ListEjoComponent extends Component
{
    public $dataejo;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($dataejo)
    {
        $this->dataejo = $dataejo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.list-ejo-component');
    }
}
