<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('vendors', function (Blueprint $table) {
      $table->id();
      $table->string('name', 255);
      $table->string('contact_name', 255);
      $table->string('email', 255);
      $table->string('phone', 255)->nullable();
      $table->text('address', 255)->nullable();
      $table->string('website', 255)->nullable();
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
    Schema::dropIfExists('vendors');
  }
}
