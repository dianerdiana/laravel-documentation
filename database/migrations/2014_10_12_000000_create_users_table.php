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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username', 20)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_active')->default(true);
            $table->integer('is_status')->default(1);
            $table->string('avatar', 100)->nullable();
            $table->string('role', 20)->default('user');
            $table->string('current_plan', 20)->default('Company');
            $table->string('billing', 225)->default('Manual - Credit Card');
            $table->rememberToken();
            $table->bigInteger('company_id')->nullable();
            $table->foreign('company_id')
                ->references('id_company')
                ->on('companies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->integer('created_by')->nullable()->default(1);
            $table->timestamp('updated_at')->useCurrent();
            $table->integer('updated_by')->nullable()->default(1);
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
            $table->dropForeign(['company_id']);
        });
        Schema::dropIfExists('users');
    }
};
