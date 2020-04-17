@extends('layouts.layout')
@section('content')
    <h3>New Client</h3>
    @include('form._form_errors')
    <form method="post" action="{{route('clients.update',['client' => $client->id])}}">
        {{method_field('PUT')}}
        @include('admin.clients._form')        

        <button class="btn btn-default" type="submit">Update</button>
    </form>
    
@endsection