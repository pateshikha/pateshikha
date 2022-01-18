<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\ContestModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\MainModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function redirect()
    {
    if(Auth::user()->role === '1')
        {
           return view('backend.adminDashboard');
        }
        else
        {
            return view('frontend.userDashboard');
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirects');
        }
        else
        {
            $data = ContestModel::all();
             return view('frontend.home',compact('data'));
        }
    }

    public function contestFrom()
    {
        return view('frontend.Contest-form');
    }

    public function storeEnqiry(Request $request)
    {
         $validator = Validator::make($request->all(),[
           'name'=>'required',
           'email'=>'required|email',
           'phone'=>'required',
           'message'=>'message',
       ]);

       $name = $request->input('name');
       $email = $request->input('email');
       $phone = $request->input('phone');
       $message = $request->input('message');

       $data = array(
        'name'=>$name,
        'email'=>$email,
        'phone'=>$phone,
        'message'=>$message,
       );
       DB::table('table_enquiry')->insert($data);
      return back()->with('message', "Your record successfully Insert!");

    }

}
