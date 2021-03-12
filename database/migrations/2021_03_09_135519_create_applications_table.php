<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id()->startingValue(202800000);
            $table->string('name', 128);
            $table->string('email', 320)->unique();
            $table->string('phone', 32);
            $table->string('street', 128);
            $table->string('flat', 16);
            $table->string('zip', 6);
            $table->string('city', 128);
            $table->enum('purchase', \App\Enums\Purchase::ALL);
            $table->enum('whence', \App\Enums\Whence::ALL);
            $table->string('whence_other', 128)->nullable();
            $table->string('img_receipt', 255);
            $table->string('img_ean', 255);
            $table->string('img_box', 255);

            $table->boolean('legal_1')->default(true);
            $table->boolean('legal_2')->default(true);
            $table->boolean('legal_3')->default(true);
            $table->boolean('legal_4')->default(false);

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
        Schema::dropIfExists('applications');
    }
}
