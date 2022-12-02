<?php

namespace App\Http\Controllers\staff;
use App\Models\products;
use Illuminate\Routing\Controller;
class AdminDetailController extends Controller
{
//コンビニ側商品詳細画面
public function staff_productdetail_display($id){
    $product = products::find($id);
return view('haiki_staff.staff_productdetail_display',['products'=>$product]);
} 
}
