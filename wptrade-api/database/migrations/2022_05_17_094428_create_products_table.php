<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_products', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->integer('is_group')->default(0);
            $table->uuid('uid_supplier');// UID поставщика
            $table->uuid('uid');         // UID товара
            $table->uuid('uid_parent');  // UID родителя в иерархии
            $table->uuid('uid_unit');    // UID ед. изм.
            $table->string('code');
            $table->string('name');
            $table->string('model');
            $table->string('vendor_code');
            $table->double('quantity', 8, 2)->default(0.0);  // общее количество на складах
            $table->string('barcode');
            $table->string('image');
            $table->double('length', 8, 3)->default(0.0); // длина
            $table->double('width', 8, 3)->default(0.0);  // ширина
            $table->double('height', 8, 3)->default(0.0); // глубина / высота
            $table->longText('comment');
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
        Schema::dropIfExists('ref_products');
    }
}
