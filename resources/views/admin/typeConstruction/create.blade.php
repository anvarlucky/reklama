@extends('layouts.main')
@section('content')
    <h1 align="center">Create</h1>
    <div class="card-body card-block">
        <form  method='post' action="{{route('admin.type-construction.store')}}">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="code" class=" form-control-label">Nazvanie tipa</label>
                <input type="text" name="name" placeholder="abcd" class="form-control">
            </div>
            <div class="form-group">
                <label for="code" class=" form-control-label">Dlina</label>
                <input type="text" name="length" placeholder="5" class="form-control">
            </div>
            <div class="form-group">
                <label for="code" class=" form-control-label">Shirina</label>
                <input type="text" name="width" placeholder="4" class="form-control">
            </div>
            <div class="form-group">
                <label for="code" class=" form-control-label">Visota</label>
                <input type="text" name="height" placeholder="4" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-lg btn-primary btn-block"> Create </button>
            </div>
        </form>
    </div>
@endsection