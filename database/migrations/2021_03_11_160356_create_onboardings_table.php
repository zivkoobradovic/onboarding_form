<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnboardingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onboardings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('manager_id');
            $table->string('manager_name');
            $table->string('manager_email');
            $table->text('contact_info');
            $table->text('platform');
            $table->text('product');
            $table->text('techSupport');
            $table->text('oto');
            $table->text('integrationType');
            $table->string('customIntegration');
            $table->string('fulfillment');
            $table->string('credentials');
            $table->text('comments');
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
        Schema::dropIfExists('onboardings');
    }
}
