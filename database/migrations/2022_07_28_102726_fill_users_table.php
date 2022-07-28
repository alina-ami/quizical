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
        Schema::table('users', function ($table) {
            $table->foreignId('role_id')->after('id')->nullable();
            $table->unsignedBigInteger('level_id')->after('role_id')->default(1);
            $table->string('gender')->after('email_verified_at')->nullable();
            $table->integer('age')->after('gender')->nullable();
            $table->unsignedBigInteger('total_points_earned')->after('age')->default(0);
            $table->json('brands_liked')->nullable()->after('total_points_earned');
            $table->json('interests')->nullable()->after('brands_liked');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
