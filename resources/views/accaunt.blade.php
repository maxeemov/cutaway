@extends('layouts.app')

@section('content')
<div class="container">
  <form action="{{route('adminAccaunt')}}"  method="post">
  <input type="hidden" name="id" value="{{Auth::user()->id}}" >
  <input type="submit" value="About Me"><br>
   {{ csrf_field() }}
  </form>
</div>
@endsection