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
        Schema::create('objeto_proveedor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('objeto_id')->constrained();
            $table->foreignId('proveedor_id')->constrained();
            $table->float('precio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objeto_proveedor');
    }
};
