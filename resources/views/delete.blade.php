@extends('layouts.app')
 

@section('content')

  <form action="{{route('adminDelete')}}"  method="post">
  <input type="hidden" name="id" value="{{Auth::user()->id}}" >
  <input type="submit" value="delete"><br>
   {{ csrf_field() }}
  </form>
 

@endsection
 

