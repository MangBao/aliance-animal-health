<?php

namespace App\Controllers\Modules;

class ModUniversal
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
