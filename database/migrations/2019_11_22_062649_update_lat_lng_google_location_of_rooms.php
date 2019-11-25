<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class UpdateLatLngGoogleLocationOfRooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('lat')->nullable()->change();;
            $table->string('lng')->nullable()->change();;
            $table->string('google_location')->nullable()->change();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rooms', function (Blueprint $table) {
            DB::statement('ALTER TABLE `rooms` MODIFY `lat` INTEGER UNSIGNED NOT NULL;');
            DB::statement('ALTER TABLE `rooms` MODIFY `lng` INTEGER UNSIGNED NOT NULL;');
            DB::statement('ALTER TABLE `rooms` MODIFY `google_location` INTEGER UNSIGNED NOT NULL;');
        });
    }
}
