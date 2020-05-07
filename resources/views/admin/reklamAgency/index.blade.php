@extends('layouts.main')
@section('content')
   <div class="card-header">
      <strong class="card-title"><a href="{{route('admin.reklam-agency.create')}}" class="btn btn-primary px-5">Create</a><br/></strong>
   </div>
   <table class="table ">
      <thead>
      <tr>
         <th class="serial">#</th>
         <th>Code</th>
         <th>Name</th>
         <th>Type</th>
         <th>Action</th>
      </tr>
      </thead>
      <tbody>
      @foreach($agencies as $id => $agency)
      <tr>
         <td class="serial">{{++$id}}</td>
         <td>{{$agency->code}}</td>
         <td>{{$agency->name}}</td>
         <td>{{$agency->type}}</td>
         <td>
            <a href="{{route('admin.reklam-agency.show', $agency->id)}}"><span class="fa fa-eye"></span></a>
            <a href="{{route('admin.reklam-agency.edit', $agency->id)}}"><span class="fa fa-pencil"></span></a>
            <a href="{{route('admin.reklam-agency.destroy', $agency->id)}}"><span class="fa fa-trash"></span></a>
         </td>
      </tr>
      @endforeach
      </tbody>
   </table>
@endsection
