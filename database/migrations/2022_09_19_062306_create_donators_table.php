<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('donators', function (Blueprint $table) {
            $table->id();
            $table -> string('name');
            $table -> string('age');
            $table -> string('gender');
            $table -> string('blood_type');
            $table -> boolean('approve') -> default(false);

            $table->timestamp('created_at') -> useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donators');
    }
};
