extends('layouts.layout')

@section('content')
    <h3>Show Client</h3>
    <a class="btn btn-primary" href="{{ route('clients.edit',['client' => $client->id]) }}">Edit</a>
    <a class="btn btn-danger" href="{{ route('clients.destroy',['client' => $client->id]) }}"
        onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete').submit();}">Delete</a>
    <form id="form-delete"style="display: none" action="{{ route('clients.destroy',['client' => $client->id]) }}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
    </form>
    <br/><br/>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th scope="row">#</th>
            <td>{{$client->id}}</td>
        </tr>
        <tr>
            <th scope="row">Name</th>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <th scope="row">Document</th>
            <td>{{$client->document_number}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{{$client->email}}</td>
        </tr>
        <tr>
            <th scope="row">Phone</th>
            <td>{{$client->phone}}</td>
        </tr>
        <tr>
            <th scope="row">Marital Status</th>
            <td>
                @switch($client->marital_status)
                    @case(1)
                        Solteiro
                        @break

                    @case(2)
                        Casado
                        @break

                    @case(3)
                        Divorciado
                        @break
                @endswitch
            </td>
        </tr>
        <tr>
            <th scope="row">Date Birth/th>
            <td>{{$client->date_birth}}</td>
        </tr>
        <tr>
            <th scope="row">Sex</th>
            <td>{{$client->sex == 'm' ? 'Masculino': 'Feminino'}}</td>
        </tr>
        <tr>
            <th scope="row">Physical Disability</th>
            <td>{{$client->physical_disability}}</td>
        </tr>
        <tr>
            <th scope="row">Dafaulting</th>
            <td>{{$client->defaulter?'Sim': 'Não'}}</td>
        </tr>
        </tbody>
    </table>
@endsection