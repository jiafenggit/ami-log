<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreShowChannelsCompleteTable extends Migration
{
    /**
     * Table name.
     *
     * @var string
     */
    public $table = 'ami_log_core_show_channels_complete';

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('list_items')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop($this->table);
    }
}
