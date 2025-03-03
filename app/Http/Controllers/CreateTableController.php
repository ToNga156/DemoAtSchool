<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CreateTableController extends Controller
{
    public function createProductsTable()
    {
        if (!Schema::hasTable('product2')) {
            Schema::create('product2', function (Blueprint $table) {
                $table->increments('id'); 
                $table->string('name', 200); 
                $table->float('price', 10, 2); 
                $table->string('image')->nullable(); 
                $table->timestamps(); 
            });

            return "Bảng 'products' đã được tạo thành công!";
        }
        return "Bảng 'product2' đã tồn tại!";
    }
}
