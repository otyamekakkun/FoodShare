<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
/*
productsテーブルの情報を更新するためのもの
*/
    use HasFactory;
    protected $table ='products';
    protected $fillable =  ['product_name','admin_id','user_id','img_path','price', 'best_by_date','bought','delete'];
}
