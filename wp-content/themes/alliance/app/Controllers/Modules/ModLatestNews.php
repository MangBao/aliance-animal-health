<?php

namespace App\Controllers\Modules;

class ModLatestNews
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
