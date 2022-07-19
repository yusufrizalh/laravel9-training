<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MasterLayout extends Component
{
    public $title;
    public $styles = null;
    public function __construct($title = null)
    {
        $this->title = $title ? $title : "Default";
    }

    public function render()
    {
        return view('layouts.master');
    }
}


