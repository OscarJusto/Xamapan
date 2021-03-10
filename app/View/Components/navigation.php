<?php

namespace App\View\Components;

use Illuminate\Support\Facades\View;
use Illuminate\View\Component;




class navigation extends Component
{
    public $categories;
    public $name;
    
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categories, $name="oscar")
    {
        $this->categories = $categories;
        $this->name = $name;    

        //
        
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render(){           
        return view('components.navigation')
    }

    
}