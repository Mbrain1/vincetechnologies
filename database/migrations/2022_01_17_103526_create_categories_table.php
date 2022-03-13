<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
   
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->bigInteger("admin_id")->unsigned()->nullable();
            $table->foreign("admin_id")->references('id')->on("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
