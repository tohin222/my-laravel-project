<?php

namespace App\Http\Controllers\Auth;

use App\models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\models\District;
use App\models\Division;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    //showRegistrationForm @overide
    public function showRegistrationForm()
    {
        $divisions = Division::orderby('id','desc')->get();
          $districts = District::orderby('id','desc')->get();
        return view('auth.register',compact('divisions','districts'));
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:30',
            'last_name' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'division_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'phone_num' => 'required|min:11',
            'street_adress' => 'required|max:100',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_name' => str_slug($data['first_name'].$data['last_name']),
            'division_id' => $data['division_id'],
            'district_id' => $data['district_id'],
            'phone_num' => $data['phone_num'],
            'street_adress' => $data['street_adress'],
            'email' => $data['email'],

            'ip_adress' => request()->ip(),

            'password' => Hash::make($data['password']),
        ]);
    }
}
