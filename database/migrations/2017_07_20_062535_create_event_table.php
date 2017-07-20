<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('oauth_client_id');
            $table->foreign('oauth_client_id')->references('id')->on('oauth_clients')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('start_daytime')->nullable();
            $table->timestamp('end_daytime')->nullable();
            $table->enum('active', ['active', 'inactive', 'dormant', 'delected'])->default('inactive');
            $table->json('settings');
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
        Schema::dropIfExists('Events');
    }
}
