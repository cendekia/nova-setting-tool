<?php

namespace Cendekia\SettingTool\Http\Controllers;

use Illuminate\Support\Facades\Schema;

class InstallationCheckController 
{    
    public function run() 
    {
        return response()->json(['installed' => Schema::hasTable('settings')]); 
    }
}
