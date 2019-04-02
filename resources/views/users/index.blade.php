@extends('layouts.layout')
@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        <div class="container">
            <form class="form-horizontal" action="{{route('user.store')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2"><input type="text" class="form-control" name="name" placeholder="Name"
                                                 value="" required></div>
                    <div class="col-md-3"><input type="text" class="form-control" name="email" placeholder="E-mail"
                                                 value="" required></div>
                    <div class="col-md-4">@include('country_list')</div>
                    <div class="col-md-2"><input class="btn btn-primary" type="submit" value="Add"></div>
                </div>
            </form>
            @include('users.partials.users')
        </div>
    </div>
@endsection