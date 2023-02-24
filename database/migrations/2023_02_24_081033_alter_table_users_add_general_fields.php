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
            $table->after('remember_token', function () use ($table) {
                $table->foreignId('team_id')->nullable()->constrained()->nullOnDelete();
                $table->boolean('is_active')->default(true);
                $table->string('country')->default('United States');
                $table->string('languages')->default('English');
                $table->string('phone')->nullable();
                $table->string('discord')->nullable();
                $table->integer('tasks_done')->unsigned()->default(0);
                $table->integer('projects_done')->unsigned()->default(0);
            });
            $table->softDeletes();
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
            $table->dropForeign('team_id');
            $table->dropSoftDeletes();
            $table->dropColumn([
                'team_id',
                'is_active',
                'country',
                'languages',
                'phone',
                'discord',
                'tasks_done',
                'projects_done'
            ]);
        });
    }
};
