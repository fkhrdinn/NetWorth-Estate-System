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
        Schema::table('users', function (Blueprint $table) {
            $table->string('telephone_number')
            ->nullable()
            ->after('name');
            $table->text('address')
            ->nullable()
            ->after('email');
            $table->string('identification_number')
            ->nullable()
            ->after('name');
            $table->boolean('role')
            ->nullable()
            ->default(0)
            ->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('telephone_number');
            $table->dropColumn('address');
            $table->dropColumn('identification_number');
            $table->dropColumn('role');
        });
    }
};
