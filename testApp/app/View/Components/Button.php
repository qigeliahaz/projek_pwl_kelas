<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Closure;
use Illuminate\Contracts\View\View;

class Button extends Component
{

    //data yang akan kita passing
    public $type; 
    public $title;

    public function __construct($type, $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

    public function render() : View|Closure|string
    {
        return view('components.button');
    }
}