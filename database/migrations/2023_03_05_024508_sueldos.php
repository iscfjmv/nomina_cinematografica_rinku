<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sueldos', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('idrol')->unsigned();
            $table->decimal('sueldobase', 8, 2);
            $table->decimal('bono', 8, 2);
            $table->decimal('precioentrega', 8, 2);
            $table->integer('horaslaborables');
            $table->integer('diaslaborables');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
