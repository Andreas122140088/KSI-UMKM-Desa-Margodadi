<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitStatisticsTable extends Migration
{
    public function up()
    {
        Schema::create('visit_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('page_url');  // Halaman yang diakses
            $table->string('ip_address');  // IP pengunjung
            $table->timestamp('accessed_at')->useCurrent();  // Waktu pengaksesan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('visit_statistics');
    }
}
