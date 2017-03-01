<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersModify extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('email')->unique();
            $table->integer('mobile');
            $table->string('password');
            $table->string('image')->nullable();
            //$table->boolean('admin')->default('0');
            //$table->integer('role_id')->unsigned()->nullable()->index();
            //$table->boolean('activated')->default(false);
            //$table->string('api_token')->nullable();
            $table->string('remember_token')->nullable();

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

//        Schema::table('users', function($table) {
//            $table->foreign('role_id')
//                ->references('id')
//                ->on('roles')
//                ->onUpdate('cascade')
//                ->onDelete('cascade');;
//        });
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
}
