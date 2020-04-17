@extends('layouts.layout')
@section('content')
    <h3>New Client</h3>
    <h4>{{$clientType == \App\Client::TYPE_INDIVIDUAL ? 'Individual' : 'Legal'}}</h4>
    <a href="{{route('clients.create',['client_type' => \App\Client::TYPE_INDIVIDUAL])}}">Person Individual</a> |
    <a href="{{route('clients.create',['client_type' => \App\Client::TYPE_LEGAL])}}">Person Legal</a>
    @include('form._form_errors')
    <form method="post" action="{{route('clients.store')}}">
        @include('admin.clients._form') 

        <button class="btn btn-default" type="submit">Send</button>
    </form>
    
@endsection