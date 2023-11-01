<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Jackiedo\Cart\Facades\Cart;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
     public $cartcount = '';
     public $page = '';
      public $active = '';
    public function __construct($page,$active)
    {
        
         $cartcount = Cart::name('shopping')->getItems();
          $this -> page = $page;
          $this -> active = $active;
          $this -> cartcount = $cartcount;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
