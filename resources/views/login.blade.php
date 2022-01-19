@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form method="POST" action="logintest">
                @csrf
                <div class="form-group">
                    <label for="exampleInputMail">Email Address</label>
                    <input type="email" name = "email" class="form-control" id="exmapleInputerEmail1" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="passweord">Password</label>
                    <input type="password" name = "password" class="form-control" id="exmapleInputerPassword1" placeholder="passowrd">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection

