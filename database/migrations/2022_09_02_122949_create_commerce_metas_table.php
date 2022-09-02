<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommerceMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commerce_metas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('commerce_id')->constrained('commerces')->onDelete('cascade');
            $table->string('key');
            $table->string('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerce_metas');
    }
}
