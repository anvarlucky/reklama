@extends('layouts.main')
@section('content')
    <div class="card-header">
        <strong class="card-title"><a href="{{route('admin.type-construction.create')}}" class="btn btn-primary px-5">Create</a><br/></strong>
    </div>
    <table class="table ">
        <thead>
        <tr>
            <th class="serial">#</th>
            <th>Name</th>
            <th>Length</th>
            <th>Width</th>
            <th>Height</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($constructions as $id => $construction)
            <tr>
                <td class="serial">{{++$id ?? ''}}</td>
                <td>{{$construction->name ?? ''}}</td>
                <td>{{$construction->length ?? ''}}</td>
                <td>{{$construction->width ?? ''}}</td>
                <td>{{$construction->height ?? ''}}</td>
                <td>
                    <a href="{{route('admin.type-construction.show', $construction->id)}}"><span class="fa fa-eye"></span></a>
                    <a href="{{route('admin.type-construction.edit', $construction->id)}}"><span class="fa fa-pencil"></span></a>
                    <a href="{{route('admin.type-construction.destroy', $construction->id)}}"><span class="fa fa-trash"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection