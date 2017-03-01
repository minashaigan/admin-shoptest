<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('image')->nullable();
            $table->string('introvideo')->nullable();
            $table->text('introduction')->nullable();
            $table->text('goal')->nullable();
            $table->dateTime('start');
            $table->text('requirement')->nullable();
            $table->text('qualification')->nullable();
            $table->double('price', 15, 2)->default(0.0);

            $table->integer('category_id')->unsigned()->index();

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

        Schema::table('courses', function($table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

