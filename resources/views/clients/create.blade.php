@extends('layouts.dashboard')


@section('content')

        <!-- BEGIN PAGE TITLE-->
<h3 class="page-title">Create New Client</h3>

<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-6">
        <div class="portlet light bordered">
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="portlet-body form">
                {!! Form::open(['class' => 'login-form']) !!}
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="client_name" value="{{ old('client_name') }}">
                        <label>Client Name</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="client_address" value="{{ old('client_address') }}">
                        <label>Client Address</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="client_city" value="{{ old('client_city') }}">
                        <label>Client City</label>
                    </div>
                    <div class="form-group form-md-line-input has-info form-md-floating-label">
                        <select name="client_state" id="client_state" class="form-control edited">
                            <option value=""></option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                        <label>Client State</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="text" class="form-control" name="client_zip" value="{{ old('client_zip') }}">
                        <label>Client Zip Code</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="phone" class="form-control" name="client_phone" value="{{ old('client_phone') }}">
                        <label>Client Phone Number</label>
                    </div>
                    <div class="form-group form-md-line-input form-md-floating-label">
                        <input type="email" class="form-control" name="client_email" value="{{ old('client_email') }}">
                        <label>Client Email Address</label>
                    </div>
                    <div class="form-actions noborder">
                        <button class="btn blue" type="submit">Submit</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
</div>
<!-- END CONTENT BODY -->

@stop('content')