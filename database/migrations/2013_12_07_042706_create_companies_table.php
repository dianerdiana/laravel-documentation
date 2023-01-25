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
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id_company');
            $table->string('company_name',50);
            $table->string('phone',15)->nullable();
            $table->string('address',255)->nullable();
            $table->integer('city_id')->nullable();
            $table->string('package',20)->nullable();
            $table->date('expired')->nullable();
            $table->integer('balance')->nullable();
            $table->string('account_id', 20)->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('is_status')->nullable();
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
        Schema::dropIfExists('companies');
    }
};
