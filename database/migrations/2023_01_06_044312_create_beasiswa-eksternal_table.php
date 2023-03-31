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
        Schema::create('beasiswa-eksternal', function (Blueprint $table) {
            $table->id();
            $table->integer("id_scholarship");
            $table->string('title');
            $table->string('tags');
            $table->text('caption');
            $table->text('thumbnail');
            $table->text('registration_link');
            $table->text('description');
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
        //
    }
};
