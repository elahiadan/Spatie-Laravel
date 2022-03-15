@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div>
            <a href="{{route('add.coder')}}" class="btn btn-info mb-3">Add Coder</a>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Language</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i =1;
                    @endphp
                    @foreach($data as $item)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->number}}</td>
                        <td>{{$item->lang}}</td>
                        <td><a href="{{route('edit.coder',['id'=>$item->id])}}" class="btn btn-info mx-2">Edit</a><a href="{{route('delete.coder',['id'=>$item->id])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection