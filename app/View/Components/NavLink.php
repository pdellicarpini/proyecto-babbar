<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLink extends Component
{
    public string $to = '';
    public string $linkClass = '';
    
    /**
     * Create a new component instance.
     */
    public function __construct(string $to = '', string $linkClass = '')
    {
        $this->to = $to;
        $this->linkClass = $linkClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-link');
    }
}
