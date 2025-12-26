<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Carousel extends Component
{
    public $image;
    public $title;
    public $text;

    public function __construct($image, $title, $text)
    {
        $this->image = $image;
        $this->title = $title;
        $this->text = $text;
    }

    public function render()
    {
        return view('carousel');
    }
}
