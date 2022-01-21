<?php

namespace App\Controllers\Modules;

class ModTestimonials
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
