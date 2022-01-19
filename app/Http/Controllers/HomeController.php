<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public static function countreview($id)
    {
        return \App\Models\Review::where('product_id', $id)->count();
    }

    public static function avgrev($id)
    {
        return \App\Models\Review::where('product_id', $id)->average('rate');
    }

    //
    public function index()
    {
        $includeWhenYes = true;
        $setting = Setting::first();
        $slider = Product::select('id','title','image','price','slug','description')->limit(6)->get();
        $daily = Product::select('id','title','image','price','slug','description')->limit(6)->inRandomOrder()->get();
        $popular = Product::select('id','title','image','price','slug')->limit(6)->inRandomOrder()->get();
        #$popular = Product::select('id','title','image','price','slug')->limit(6)->orderByDesc('id')->get();
        return view('home.index',compact('setting','includeWhenYes', 'slider','daily','popular'));
    }

    public function product($id,$slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $reviews = \App\Models\Review::where('product_id',$id)->get();
        $includeWhenYes = false;
        $setting = Setting::first();
        return view('home.product_detail',compact('setting','includeWhenYes','data','datalist','reviews'));
    }

    public function payment($id)
    {
        echo "Payment here <br>";
        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function getproduct(Request $request)
    {
        $search=$request->input('search');

        $count = Product::where('title','like','%'.$search.'%')->get()->count();
        if ($count==1)
        {
            $data = Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('product',['id'=>$data->id,'slug'=>$data->slug]);
        }
        else
        {
            return redirect()->route('productlist',['search'=>$search]);
        }
    }

    public function productlist($search)
    {
        $includeWhenYes = false;
        $datalist = Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist,'includeWhenYes'=>$includeWhenYes]);
    }

    public function aboutus()
    {
        $includeWhenYes = false;
        $setting = Setting::first();
        return view('home.about',compact('setting','includeWhenYes'));
    }

    public function contact()
    {
        $includeWhenYes = false;
        $setting = Setting::first();
        return view('home.contact',compact('setting','includeWhenYes'));
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Your message has been received. Thanks!');
    }

    public function references()
    {
        $includeWhenYes = false;
        $setting = Setting::first();
        return view('home.references',compact('setting','includeWhenYes'));
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        $includeWhenYes = false;
        $setting = Setting::first();
        return view('home.faq',compact('setting','includeWhenYes','datalist'));
    }

    public function category_products($id,$slug)
    {
        $includeWhenYes = false;
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_products',['includeWhenYes'=>$includeWhenYes,'data'=>$data,'datalist'=>$datalist]);
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors(['email' => 'The provided credentials do not match our records.',]);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
