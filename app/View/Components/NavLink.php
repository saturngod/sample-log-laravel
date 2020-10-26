<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $href;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href,$icon)
    {
        $this->href = $href;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.nav-link');
    }
}
