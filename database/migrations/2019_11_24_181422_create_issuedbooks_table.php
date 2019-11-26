<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuedbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issuedbooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('book_id')->unsigned()->index();
            $table->biginteger('student_id')->unsigned()->index();
            $table->date('issues_date');
            $table->date('return_date')->nullable();
            $table->boolean('status')->default(0);
            $table->integer('fine')->nullable();

            $table->foreign('book_id')
                  ->references('id')->on('books')
                  ->onDelete('cascade');

                  $table->foreign('student_id')
                        ->references('id')->on('users')
                        ->onDelete('cascade');
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
        Schema::dropIfExists('issuedbooks');
    }
}
