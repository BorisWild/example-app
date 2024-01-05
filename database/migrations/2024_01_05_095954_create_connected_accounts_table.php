<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('connected_accounts', function (Blueprint $table) {
			$table->uuid('id');
            $table->primary('id');
            
			$table->uuid('user_id')->nullable();
			$table->foreign('user_id')
			->references('id')
			->on('users')
			->constrained()
			->cascadeOnDelete();

			$table->string('provider');
			$table->string('provider_user_id');
			$table->string('name')->nullable();
			$table->string('nickname')->nullable();
			$table->string('email')->nullable();
			$table->string('phone')->nullable();
			$table->text('avatar')->nullable();
			$table->text('token');
			$table->text('refresh_token')->nullable();
			$table->timestamp('expires_at')->nullable();

            $table->timestamps();
        });
    }
};
