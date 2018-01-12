@extends('layouts/app')

@section('content')
    @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $e)
                    <li>
                        {{ $e }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
                <A href="{{ route('profile') }}" >⇚ Back to the profile</A>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                <div class="panel panel-info">
                    {{ Form::open(array('url' => 'change-profile')) }}
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ Form::text('firstname', $userdatas->firstname) }}
                            {{ Form::text('lastname', $userdatas->lastname) }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img alt="User Pic" class="img-circle img-responsive"
                                     @if($userdatas->imagepath == '')
                                     src="/images/user-default.png"
                                     @else
                                     src="{{ $userdatas->imagepath }}"
                                        @endif
                                >
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Hire date:</td>
                                        <td>{{ $userdatas->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>{{ Form::date('birth', $userdatas->birth) }}</td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>
                                            {{ Form::select('gender', array(
                                                    0 => 'Female',
                                                    1 => 'Male'
                                               ), $userdatas->gender)
                                            }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{ Form::text('address', $userdatas->address) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:info@support.com">{{ $userEmail }}</a></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td>{{ Form::text('phone', $userdatas->phone)  }}</td>

                                    </tr>
                                    </tbody>
                                </table>
                                <div style="float: right;">
                                    {{ Form::button('submit',array(
       'type'=>'submit',
       'class'=>'btn btn-primary'
   )) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@endsection