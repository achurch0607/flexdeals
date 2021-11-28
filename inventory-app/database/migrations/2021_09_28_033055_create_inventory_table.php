<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->string('datePurchased');
            $table->string('dateSold')->default('0');
            $table->string('qtySold')->default('0');
            $table->string('platformListed');
            $table->string('platformSold')->default(0);
            $table->string('description');
            $table->decimal('retailPrice', 5, 2);
            $table->decimal('askingPrice', 5, 2);
            $table->decimal('sellPrice', 5, 2)->default(0);
            $table->decimal('fees',5, 2)->default(0);
            $table->text('notes');
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
        Schema::dropIfExists('inventory');
    }
}
