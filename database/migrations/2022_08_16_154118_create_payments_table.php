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
            $table->string('username');
            $table->string('status');
            $table->string('reference')->nullable();
            $table->string('amount')->nullable();
            $table->string('channel')->nullable();
            $table->string('currency')->nullable();
            $table->string('ip_address');
            $table->string('bin')->nullable();
            $table->string('last4')->nullable();
            $table->string('exp_month')->nullable();
            $table->string('exp_year')->nullable();
            $table->string('pay_channel')->nullable();
            $table->string('card_type')->nullable();
            $table->string('brand')->nullable();
            $table->string('account_name')->nullable();
            $table->string('country_code')->nullable();
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
