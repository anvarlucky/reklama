@extends('layouts.main')
@section('content')
    <h1 align="center">Create</h1>
    <div class="card-body card-block">
<form  method='post' action="{{route('admin.reklam-agency.store')}}">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="code" class=" form-control-label">Kod</label>
        <input type="text" name="code" placeholder="1,2,3..." class="form-control">
    </div>
    <div class="form-group">
        <label for="code" class=" form-control-label">Tip</label>
        <input type="text" name="type" placeholder="OOO, ChP" class="form-control">
    </div>
    <div class="form-group">
        <label for="code" class=" form-control-label">Nazvanie</label>
        <input type="text" name="name" placeholder="abcd" class="form-control">
    </div>
    <div>
        <button type="submit" class="btn btn-lg btn-primary btn-block"> Create </button>
    </div>
</form>
</div>
@endsection