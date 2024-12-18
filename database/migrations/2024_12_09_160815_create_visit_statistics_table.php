<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visit_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('page_url');       // Menyimpan URL halaman yang dikunjungi
            $table->string('ip_address');     // Menyimpan IP pengunjung
            $table->timestamps();            // Menyimpan waktu kapan data dicatat
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visit_statistics');
    }
}
