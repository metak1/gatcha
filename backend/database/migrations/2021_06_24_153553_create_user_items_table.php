<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_items', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('item_id');
            $table->integer('unit_id')->nullable();
            $table->integer('level')->default(1);
            $table->integer('hp_bonus');
            $table->integer('percent_hp_bonus');
            $table->integer('attack_bonus');
            $table->integer('percent_attack_bonus');
            $table->integer('defense_bonus');
            $table->integer('percent_defense_bonus');
            $table->integer('speed_bonus');
            $table->integer('crit_chance_rate_bonus');
            $table->integer('crit_damage_rate_bonus');
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
        Schema::dropIfExists('user_items');
    }
}
