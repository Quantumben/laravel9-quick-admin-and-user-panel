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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('username')->default(0);
            $table->string('status')->default(0);
            $table->string('reference')->nullable();
            $table->string('amount')->default(0)->nullable();
            $table->string('channel')->default(0)->nullable();
            $table->string('currency')->default(0)->nullable();
            $table->string('ip_address')->default(0);
            $table->string('bin')->default(0)->nullable();
            $table->string('last4')->default(0)->nullable();
            $table->string('exp_month')->default(0)->nullable();
            $table->string('exp_year')->default(0)->nullable();
            $table->string('pay_channel')->default(0)->nullable();
            $table->string('card_type')->default(0)->nullable();
            $table->string('brand')->default(0)->nullable();
            $table->string('account_name')->default(0)->nullable();
            $table->string('country_code')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
