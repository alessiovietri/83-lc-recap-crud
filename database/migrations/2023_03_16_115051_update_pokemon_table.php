<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            $table->string('type_1', 16)->nullable()->change();
            $table->unsignedSmallInteger('atk')->nullable()->after('shiny');
            $table->unsignedSmallInteger('def')->nullable()->after('shiny');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemon', function (Blueprint $table) {
            $table->string('type_1', 16)->nullable(false)->change();
            if (Schema::hasColumn('pokemon', 'atk')) {
                $table->dropColumn('atk');
            }
            if (Schema::hasColumn('pokemon', 'def')) {
                $table->dropColumn('def');
            }
        });
    }
};
