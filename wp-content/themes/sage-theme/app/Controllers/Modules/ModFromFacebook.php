<?php

namespace App\Controllers\Modules;

class ModFromFacebook
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
