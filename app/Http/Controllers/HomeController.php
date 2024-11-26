<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Mail;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        // Lấy danh mục sản phẩm
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderby('category_id', 'desc')
            ->get();

        // Lấy thương hiệu sản phẩm
        $brand_product = DB::table('tbl_brand')
            ->where('brand_status', '1')
            ->orderby('brand_id', 'desc')
            ->get();

        // Lấy danh sách sản phẩm
        $all_product = DB::table('tbl_product')
            ->where('product_status', '1')
            ->orderby('product_id', 'desc')
            ->get();

        // Truyền biến $all_product sang view
        return view('pages.home')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product);
    }
}
