<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Sentinel;

class ForgotPasswordController extends Controller
{

    public function forgotPassword(){
        return view('authentication.forgot-password');

    }
    public function  postForgotPassword(Request $request)
    {

        $user=User::whereEmail( $request->email)->first();


        if (count($user)==0)
            return redirect()->back()->with(['success'=>'Reset Code was sent to your email.']);



        $reminder=Reminder::exists($user)?:Reminder::create($user);
        $this->sendEmail($user,$reminder->code);
        return redirect()->back()->with(['success'=>'Reset Code was sent to your email.']);



    }
    public function sendEmail($user,$code){
        Mail::send('emails.forgot-password',[
            'user'=>$user,
            'code'=>$code
        ],function ($message) use ($user){
            $message->from('persogridinfo@gmail.com', 'PersoGird');
            $message ->to ($user->email);
            $message->subject("Hello $user->first_name, reset your password.");
        });
    }

    public function postResetPassword(Request $request,$email,$resetCode)
    {
        $this->validate($request,[
            'password'=>'confirmed|required|min:5|max:15',
            'password_confirmation'=>'required|min:5|max:15'

        ]);


        $user=User::byEmail($email);

        $countd=$user->where('email',$email)->count();
        if($countd==0)
            abort(404);


        if($reminder=Reminder::exists($user))
        {

            if($resetCode==$reminder->code){
                Reminder::complete($user,$resetCode,$request->password);
                return redirect('/login')->with('success','Your password changed succesfully.');
            }

            else
                return  redirect('/');

        }else
        {
            return  redirect('/');
        }


    }


    public function resetPassword($email,$resetCode){
        $user=User::byEmail($email);

        $count=$user->where('email',$email)->count();
        if($count==0)
            abort(404);


        if($reminder=Reminder::exists($user))
        {

            if($resetCode==$reminder->code)
                return view('authentication.reset-password');

            else
                return  redirect('/');

        }else
        {
            return  redirect('/');
        }

    }
}
