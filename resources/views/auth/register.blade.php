@extends('layouts.login')

@section('content')

        <!-- BEGIN LOGIN FORM -->
<form class="login-form" action="/auth/register" method="post">
    {{ csrf_field() }}
    <h3 class="form-title font-green">Register</h3>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Name</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Name" name="name" value="{{ old('name') }}" /> </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email Address</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="email" autocomplete="off" placeholder="Email Address" name="email" value="{{ old('email') }}" /> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
        <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirm Password" name="password_confirmation" /> </div>
    <div class="form-actions">
        <button type="submit" class="btn green uppercase">Register</button>
    </div>
</form>
<!-- END LOGIN FORM -->

@stop('content')