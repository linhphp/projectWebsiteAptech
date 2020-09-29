<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSignIn()
    {
        //
        return view('admin.signin.signIn');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSignUp()
    {
        //
        return view('admin.signin.signUp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postSignIn(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postSignUp(Request $request)
    {
        //
        $this->validate($request,
            [
                'name' => 'required|max:50',
                'email' => 'required|unique:users,email|max:100',
                'password' => 'required|min:6|max:40',
                'repassword' => 'required|same:password'
            ],
            [
                'name.required' => 'tên không được để trống',
                'email.required' => 'email không được để trống',
                'password.required' => 'password không được để trống',
                'repassword.required' => 'repassword không được để trống',

                'name.max' => 'tên tối đa là 50 ký tự',
                'email.max' => 'email tối đa là 100 ký tự',
                'password.max' => 'password tối đa là 40 ký tự',

                'email.unique' => 'email đã tồn tại',
                'password.min' => 'password tối thiểu 6 ký tự',
                'repassword.same' => 'mật khẩu không giống nhau'
            ]
        );
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = hash::make($request->password);
        $data->power = 1;
        $data->save();
        return redirect()->back()->with('message','đăng ký thành công, đăng nhập ngay');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
