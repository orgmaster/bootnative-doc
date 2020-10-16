<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('label');
            $table->string('slug');
            $table->integer('score')->default(0);
            $table->timestamps();
            $table->foreignId('directory_id')->constrained('directories')->onDelete('cascade');
        });

        Schema::create('doc_version', function (Blueprint $table) {
            $table->foreignId('doc_id')->constrained('docs')->onDelete('cascade');
            $table->foreignId('version_id')->references('id')->on('versions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docs');
        Schema::dropIfExists('doc_version');
    }
}
