<?php

namespace Cendekia\SettingTool\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class AlterSettingTableMigration
{
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->longText('value')->change();
        });
    }

    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->string('value')->change();
        });
    }
}
