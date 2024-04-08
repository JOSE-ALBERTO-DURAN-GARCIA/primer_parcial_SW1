<?php

namespace App\View\Components\Shared;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderPage extends Component
{
        // public $path;  podemos hacerlo de esta forma tradicional declaramos las variables
        // public $title;
        // public $button;
        // public $description;
    /**
     * Create a new component instance.
     */
    public function __construct(

        public string $path,
        public string $title,
        public string $button,
        public string $description,
    ){}
        //$this->path = $path,
        //$this->title = $title,
        //$this->button = $button,
        //$this->description = $description ,
    

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.header-page');
    }
}
