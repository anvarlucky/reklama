@extends('layouts.main')
@section('content')
    <h1 align="center">Show</h1>
    <p>{{$getOne->name}}</p>
    <p>{{$getOne->length}}</p>
    <p>{{$getOne->width}}</p>
    <p>{{$getOne->height ?? '-'}}</p>
@endsection