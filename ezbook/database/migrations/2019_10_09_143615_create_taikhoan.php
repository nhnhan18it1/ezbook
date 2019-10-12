<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaikhoan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->bigIncrements('IDTaiKhoan')->autoIncrement();
            $table->string('TenTK',14);
            $table->string('MatKhau',100);
            $table->string('TypeACC',5);
            $table->string('Name',255);
            $table->string('DiaChi',255);
            $table->date('NgaySinh');
            $table->char('SDT',10);

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
        Schema::dropIfExists('taikhoan');
    }
}
