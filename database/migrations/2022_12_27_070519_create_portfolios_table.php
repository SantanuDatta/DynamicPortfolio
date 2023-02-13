<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('name')->unique();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('job')->nullable();
            $table->string('client')->nullable();
            $table->string('date')->nullable();
            $table->string('company')->nullable();
            $table->string('link')->nullable();
            $table->integer('status')->default(0)->comment('0 = Inactive, 1 = Active');
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
        Schema::dropIfExists('portfolios');
    }
};
