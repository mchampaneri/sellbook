@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                    HI ,{{ Auth::user()->name}}
                </div>
                    <a href="{{url('/logout')}}">Log me Out</a>
            </div>
        </div>
    </div>
</div>
@endsection
