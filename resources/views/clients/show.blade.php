@extends('layouts.dashboard')


@section('content')

        <!-- BEGIN PAGE TITLE-->
<h3 class="page-title">{{ $client->client_name }}</h3>

<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PROFILE SIDEBAR -->
        <div class="profile-sidebar">
            <!-- PORTLET MAIN -->
            <div class="portlet light profile-sidebar-portlet ">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="{{ Gravatar::get($client->client_email) }}" class="img-circle" alt=""> </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"> {{ $client->client_first_name }} {{ $client->client_last_name }} </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">
                    <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                    <button type="button" class="btn btn-circle red btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="page_user_profile_1.html">
                                <i class="icon-home"></i> Overview </a>
                        </li>
                        <li>
                            <a href="page_user_profile_1_account.html">
                                <i class="icon-settings"></i> Account Settings </a>
                        </li>
                        <li>
                            <a href="page_user_profile_1_help.html">
                                <i class="icon-info"></i> Help </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
            <!-- END PORTLET MAIN -->
            <!-- PORTLET MAIN -->
            <div class="portlet light ">
                <!-- STAT -->
                <div class="row list-separated profile-stat">
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 37 </div>
                        <div class="uppercase profile-stat-text"> Projects </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 51 </div>
                        <div class="uppercase profile-stat-text"> Tasks </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="uppercase profile-stat-title"> 61 </div>
                        <div class="uppercase profile-stat-text"> Uploads </div>
                    </div>
                </div>
                <!-- END STAT -->
                <div>
                    <h4 class="profile-desc-title">About Marcus Doe</h4>
                    <span class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-globe"></i>
                        <a href="http://www.keenthemes.com">www.keenthemes.com</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-twitter"></i>
                        <a href="http://www.twitter.com/keenthemes/">@keenthemes</a>
                    </div>
                    <div class="margin-top-20 profile-desc-link">
                        <i class="fa fa-facebook"></i>
                        <a href="http://www.facebook.com/keenthemes/">keenthemes</a>
                    </div>
                </div>
            </div>
            <!-- END PORTLET MAIN -->
        </div>
        <!-- END BEGIN PROFILE SIDEBAR -->
    </div>
</div>

</div>
<!-- END CONTENT BODY -->

@stop('content')