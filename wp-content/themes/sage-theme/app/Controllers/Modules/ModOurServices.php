<?php

namespace App\Controllers\Modules;

class ModOurServices
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
