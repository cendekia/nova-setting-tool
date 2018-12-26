<?php

namespace Cendekia\SettingTool\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Cendekia\SettingTool\Migrations\AlterSettingTableMigration;

class InstallationCheckController 
{    
    public function run() 
    {
        return response()->json(['installed' => Schema::hasTable('settings')]); 
    }
}
