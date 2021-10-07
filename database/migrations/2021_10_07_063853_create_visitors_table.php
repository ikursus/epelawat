<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id(); // column bernama id dan Primary Key
            $table->string('mykad');
            $table->string('nama');
            $table->string('no_locker')->nullable();
            $table->string('no_kad_akses')->nullable();
            $table->string('jabatan');
            $table->string('no_telefon')->nullable();
            $table->text('aktiviti');
            $table->string('no_rak')->nullable();
            $table->string('pegawai_pengiring');
            $table->timestamp('waktu_masuk')->nullable();
            $table->timestamp('waktu_keluar')->nullable();
            $table->timestamps(); // 2 column iaitu created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitors');
    }
}
