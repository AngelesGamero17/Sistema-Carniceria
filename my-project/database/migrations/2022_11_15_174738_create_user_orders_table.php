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
        Schema::create('user_orders', function (Blueprint $table) {
            $table->foreignId('id_user')
	              ->nullable()
	              ->constrained('users')
	              ->cascadeOnUpdate()
	              ->nullOnDelete();

                  $table->foreignId('id_order')
	              ->nullable()
	              ->constrained('orders')
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
        Schema::dropIfExists('user_orders');
    }
};
