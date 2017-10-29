@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <a class="btn btn-success" href="{{ action('AdminController@index',['site'=>'change']) }} " >ChangeInfo</a>
                  <a class="btn btn-success" href="{{ action('AdminController@index',['site'=>'delete'])}} " >DeleteAccount</a>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
