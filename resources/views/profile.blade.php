@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                <A href="{{ route('changeprofile') }}" >Edit Profile</A>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $userdatas->firstname }} {{ $userdatas->lastname }}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Hire date:</td>
                                        <td>06/23/2013</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>{{ $userdatas->birth }}</td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                            @if($userdatas->gender == 1)
                                                Male
                                            @else
                                                Female
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ $userdatas->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:info@support.com">{{ $userEmail }}</a></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td>{{ $userdatas->phone }}</td>

                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection