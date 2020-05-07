@extends('layouts.main')
@section('content')
    <h1 align="center">Edit</h1>
    <div class="card-body card-block">
        <form method='post' action="{{route('admin.type-construction.update',$editOne->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="code" class=" form-control-label">Nazvanie tipa</label>
                <input type="text" name="name"  value="{{$editOne->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="code" class=" form-control-label">Dlina</label>
                <input type="text" name="length"  value="{{$editOne->length}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="code" class=" form-control-label">Shirina</label>
                <input type="text" name="width"  value="{{$editOne->width}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="code" class=" form-control-label">Visota</label>
                <input type="text" name="height"  value="{{$editOne->height}}" class="form-control">
            </div>
            <div>
                <button type="submit" class="btn btn-lg btn-primary btn-block"> Update </button>
            </div>
        </form>
    </div>
@endsection