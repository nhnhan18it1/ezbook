<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhsachdiadiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhsachdiadiem', function (Blueprint $table) {
            $table->bigIncrements('IDDiaDiem');
            $table->string('TenDiaDiem');
            $table->string('DiaChiCT');
            $table->string('AnhMinhHoa');
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
        Schema::dropIfExists('danhsachdiadiem');
    }
}
