<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('uniq_id');
            $table->string('size');
            $table->string('file_type');
            $table->bigInteger('uploaded_by')->unsigned();
            $table->foreign('uploaded_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('view_count')->default(0);
            $table->string('ip')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('files');
    }
}
