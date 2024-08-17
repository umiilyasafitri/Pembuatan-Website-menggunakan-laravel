<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View |\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('components.footer');
    }
}
