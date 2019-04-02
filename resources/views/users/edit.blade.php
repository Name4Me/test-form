@extends('layouts.layout')
@section('content')
<div class="container">
    <h2>User profile</h2>
    <hr />
    <form class="form-horizontal" action="{{route('user.update', $user)}}" method="post">
        <input type="hidden" name="_method" value="put">
        {{csrf_field()}}
        {{-- Form include --}}
        @include('users.partials.form')
    </form>

</div>
@endsection