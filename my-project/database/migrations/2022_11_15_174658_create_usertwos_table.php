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
        Schema::create('usertwos', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->string('surname',40);
            $table->string('cell',40);
            $table->string('address');
            $table->timestamps();

            $table->foreignId('id_marital')
	              ->nullable()
	              ->constrained('maritals')
	              ->cascadeOnUpdate()
	              ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
