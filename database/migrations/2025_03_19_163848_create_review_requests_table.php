<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('review_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('email');
            $table->string('product_type');
            $table->string('product_brand');
            $table->string('product_name');
            $table->timestamp('request_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('review_requests');
    }
}
