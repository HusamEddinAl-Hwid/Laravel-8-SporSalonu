<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    //
    public function index()
    {
        $includeWhenYes = true;
        $setting = Setting::first();
        $slider = Product::select('id','title','image','price','slug','description')->limit(6)->get();
        $daily = Product::select('id','title','image','price','slug','description')->limit(6)->inRandomOrder()->get();
        $popular = Product::select('id','title','image','price','slug')->limit(6)->orderByDesc('id')->get();
        return view('home.index',compact('setting','includeWhenYes', 'slider','daily','popular'));
    }

    public function product($id,$slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $includeWhenYes = false;
        $setting = Setting::first();
        return view('home.product_detail',compact('setting','includeWhenYes','data','datalist'));
    }

    public function payment($id)
    {
        echo "Payment here <br>";
        $data = Product::find($id);
        print_r($data);
        exit();
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
        $includeWhenYes = false;
        $setting = Setting::first();
        return view('home.index',compact('setting','includeWhenYes'));
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
