@extends('layouts.layout')
@section('content')
    
    <h3>List Clients</h3>
    <a href="{{ route('clients.create') }}" class="btn btn-default">Create</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Document</th>
                <th>Date Birth</th>
                <th>E-mail</th>
                <th>Phone Number</th>
                <th>Sex</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->document_number}}</td>
                    <td>{{$item->date_birth}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->sex}}</td>
                    <td>
                        <a href="{{route('clients.edit',['client' => $item->id])}}">Edit</a>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>
@endsection