<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    public string $type;

    public string $type_class;
    
    public array $types= [
        'primary' => 'bg-primary gap-6 text-[#444444] text-sm py-2 px-7 rounded-full d-inline-flex',
        'outline' => 'border gap-6 border-primary text-[#444444] text-sm py-4 px-7 rounded-full d-inline-flex',
    ];

    /**
     * Create a new component instance.
     */

    public function __construct( $type = 'primary')
    {
        $this->type  = $type;
        $this->type_class = $this->types[$type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
