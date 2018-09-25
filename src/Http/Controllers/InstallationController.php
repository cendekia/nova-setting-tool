<?php

namespace Cendekia\SettingTool\Http\Controllers;

use Cendekia\SettingTool\Http\Controllers\BaseController;
use Cendekia\SettingTool\Migrations\AlterSettingTableMigration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class InstallationController extends BaseController
{
    /**
     * [process description]
     * @return void
     */
    protected function process(): void
    {
        try {
            Artisan::call('migrate');
        } catch (\Exception $e) {
            $this->message = "Unable to created settings table.";
            $this->statusCode = 500;
        }

        if (Schema::hasTable('settings')) {
            $migration = new AlterSettingTableMigration;

            try {
                $migration->up();
                $this->message = "The setting tool has been successfully installed. . The page will refresh in few seconds...";
            } catch (\Exception $e) {
                $this->message = "Unable to update settings table.";
                $this->statusCode = 500;
            }
        }
    }
}
