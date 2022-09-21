<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id();
            $table -> string('volume');
            $table -> string('blood_type');
            $table -> string('emergency');
            $table -> string('hospital_id');
            $table -> string('state') -> nullable();

            $table->timestamp('created_at') -> useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blood_requests');
    }
};
