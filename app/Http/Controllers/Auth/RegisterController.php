<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;


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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8'],
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
        
        return customers::create([
            'name' => $data['name'],
            'adress' => $data['adress'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'type' => $data['check_list'],
            'detail' => $data['detail'],
            'imgcustomer' => $data['imgcustomer'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function getRegister() 
    {
    return view('customer.register');
    }
    public function postRegister(Request $request) 
    {
    // Kiểm tra dữ liệu vào
    $allRequest  = $request->all(); 
    $validator = $this->validator($allRequest);
 
    if ($validator->fails()) {
        // Dữ liệu vào không thỏa điều kiện sẽ thông báo lỗi
        return redirect('register')->withErrors($validator)->withInput();
    } else {   
        // Dữ liệu vào hợp lệ sẽ thực hiện tạo người dùng dưới csdl
        if( $this->create($allRequest)) {
            // Insert thành công sẽ hiển thị thông báo
            Session::flash('success', 'Đăng ký thành viên thành công!');
            return redirect('login');
        } else {
            // Insert thất bại sẽ hiển thị thông báo lỗi
            Session::flash('error', 'Đăng ký thành viên thất bại!');
            return redirect('register');
        }
    }
    }
}
