@extends('layouts.app')
@section('title')
    Todo {{$todo[0]->name}}
@endsection
@section('content')
<h1 class="text-center my-5">{{$todo[0]->name}}</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Details</div>
        <div class="card-body">{{$todo[0]->desc}}</div>
        </div>
    </div>
</div>
@endsection