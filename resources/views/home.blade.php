@extends('layouts.app')

@section('content')
    {{ header('Refresh: 5; '. route('welcome')) }}

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in ! Wait, you've been redirect in <span id="countdown"></span> seconds. If you doesn't redirect : click <a href="/">here</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
