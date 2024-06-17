<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'sections.header'
    ];


    public function with()
    {
        return [
            'btn' => get_field( 'ctabutton_1', 'option'),
            'btn2' => get_field( 'ctabutton_2', 'option')
        ];
    }
}
