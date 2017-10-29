@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{route('adminUpdate')}}"  method="post">
  
  <input type="hidden" name="id" value="{{Auth::user()->id}}" >
  <label> Email</label><br>
  <input type="email" name="email" required><br>
  <label>Login</label><br>
  <input type="text" name="login" required><br>
  <label> Name</label><br>
  <input type="text" name="name" required><br>
  <input type="submit" value="Submit"><br>
   {{ csrf_field() }}
  </form>
</div>
@endsection