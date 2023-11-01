<?php

namespace App\View\Components;

use Illuminate\View\Component;
use DB;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $page = '';
    public function __construct($page)
    {
         $this -> page = $page;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $detail = \DB::table('companies')->first();
        return view('components.footer', compact('detail'));
    }
}
