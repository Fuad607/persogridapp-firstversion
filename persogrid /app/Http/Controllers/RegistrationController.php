<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class RegistrationController extends Controller
{
    //
    public function getSignup()
    {


        return view('signup');
    }
    public function postSignup(Request $request){
        $this->validate($request, [
            'password'=>'required|min:5|max:15',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',

        ]);



  $user=Sentinel::register($request->all());
     $activation = Activation::create($user);
     $role = Sentinel::findRoleBySlug('employee');
     $role->users()->attach($user);

     $this->sendEmail($user, $activation->code);

        return view('inc.thanks');
 }


    private function sendEmail($user,$code)
    {


       Mail::send('emails.activation',
           [
               'user'=>$user,
               'code'=>$code

           ],function ($message) use ($code, $user){
           $message->from('persogridinfo@gmail.com', 'PersoGird');
           $message->to($user->email);
           $message->subject("Hello $user->first_name,
           activate your account.");
       });

    }

}
