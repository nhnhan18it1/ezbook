<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->bigIncrements('IDDonHang');
            $table->datetime('NgayDat');
            $table->integer('IDHDV');
            $table->integer('IDKH');
            $table->integer('DonGia');
            $table->integer('IDDiaDiem');
            $table->string('TinhTrang');
            $table->integer('TienCongHDV');
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
        Schema::dropIfExists('donhang');
    }
}
