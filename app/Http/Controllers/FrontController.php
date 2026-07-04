<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function StoreNewslater(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|unique:newslaters|max:55',
        ]);

        $data = array();
        $data['email'] = $request->email;
        DB::table('newslaters')->insert($data);
        $notification = array(
            'messege' => 'Thanks for subscribing ',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }
    public function ProductSearch(Request $request)
    {
        $brands = DB::table('brands')->get();
        $item = $request->search;
        $products = DB::table('products')
            // ->join('brands','products.brand_id','brands.id')
            // ->select('products.*','brands.brand_name')
            ->where('product_name', 'LIKE', "%{$item}%")
            // ->orWhere('brand_name','LIKE', "%{$item}%")
            ->paginate(20);
        return view('pages.search', compact('brands', 'products'));
    }

    public function BrandProduct($id)
    {
        $Brandproduct = DB::table('products')->where('brand_id', $id)->limit(6)->get();


        // return $Brandproduct;
        return view('test', compact('Brandproduct'));
    }
    public function trade()
    {
        return view('pages.trade');
    }
    public function buyonegetone()
    {
        return view('pages.buyonegetone');
    }
    public function newarri()
    {
        return view('pages.newarri');
    }
    public function off()
    {
        return view('pages.off');
    }
    public function bestrate()
    {
        return view('pages.bestrate');
    }
}
