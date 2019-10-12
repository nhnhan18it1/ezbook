<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanggiahdv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banggiahdv', function (Blueprint $table) {
            $table->bigIncrements('IDHDV');
            $table->integer('IDDiaDiem');
            $table->float('MucDanhGia');
            $table->string('KhaNangDacBiet');
            $table->integer('Gia');
            $table->string('Avt');
            $table->string('MaTheHanhNghe');
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
        Schema::dropIfExists('banggiahdv');
    }
}
