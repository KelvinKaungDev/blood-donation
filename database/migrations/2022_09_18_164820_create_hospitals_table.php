<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table -> id();
            $table -> string('name');
            $table -> string('password');
            $table -> string('email') -> unique();
            $table -> string('hospital_id') -> unique();

            $table -> rememberToken();
            $table->timestamp('created_at') -> useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hospitals');
    }
};
