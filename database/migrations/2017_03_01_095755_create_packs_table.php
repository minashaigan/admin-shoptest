<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {

            $table->increments('id');

            $table->string('title');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->dateTime('open_time');
            $table->text('requirement')->nullable();
            $table->text('work_description')->nullable();
            $table->dateTime('work_start');
            $table->text('goal')->nullable();
            $table->integer('duration');

            //$table->double('price', 15, 2)->default(0.0);
            $table->double('price_day', 15, 2)->default(0.0);
            $table->double('price_month', 15, 2)->default(0.0);
            $table->double('price_year', 15, 2)->default(0.0);
            $table->timestamps();

            /*
             * If you soft delete
             * something it is still there so it's able to be
             * recovered (un-deleted) Hard delete,
             * or permanent delete, deletes it
             * off your database for good.
             * So you would not be able
             * to get that post back !
             * unless you had a backup
             */
            $table->softDeletes();
            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packs');
    }
}
