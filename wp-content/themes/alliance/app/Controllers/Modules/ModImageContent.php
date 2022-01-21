<?php

namespace App\Controllers\Modules;

class ModImageContent
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
