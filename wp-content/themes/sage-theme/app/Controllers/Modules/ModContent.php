<?php

namespace App\Controllers\Modules;

class ModContent
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
