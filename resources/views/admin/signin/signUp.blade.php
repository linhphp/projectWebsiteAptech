@extends('admin/signin/master')
@section('title','đăng ký tài khoản')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng ký</h3></div>
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}} <br>
                    @endforeach
                </div>
                @endif
                @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                <div class="card-body">
                    <form action="{{route('signUp.post')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Full Name</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter full name" name="name" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="repassword" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" href="login.html">Tạo tài khoản</button></div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="{{route('signIn.get')}}">đã có tài khoản? hãy đăng nhập </a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection