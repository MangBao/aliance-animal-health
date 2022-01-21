<?php

namespace App\Controllers\Modules;

class ModThreeBoxes
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
