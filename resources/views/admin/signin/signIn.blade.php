@extends('admin/signin/master')
@section('title','đăng nhập hệ thống')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng Nhập</h3></div>
                <div class="card-body">
                    <form action="{{route('signIn.post')}}" method="post">
                    	@csrf
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                            <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                        </div>
                        <div class="form-group">
                            <label class="small mb-1" for="inputPassword">Password</label>
                            <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button class="btn btn-primary" href="index.html">đăng nhập</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="{{route('signUp.get')}}">chưa có ài khoản? đăng ký!</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection