<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
/**
* Run the migrations.
*/
// protected $fillable=['product_brand','status'];
public function up(): void
{
Schema::create('brands', function (Blueprint $table) {
$table->id();
$table->text('product_brand');
$table->string('status');
$table->enum('deleted', ['true', 'false'])->default('false');
$table->timestamps();
});
}


/**
* Reverse the migrations.
*/
public function down(): void
{
Schema::dropIfExists('brands');
}
};