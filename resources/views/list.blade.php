@extends('app')

@section('content')
    <div class="container">

        @if (Session::has('deleted'))
            <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('contact/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
        @endif

        @if (Session::has('restored'))
            <div class="alert alert-success" role="alert"> Contacto restaurado</div>
        @endif

        <div class="row">
            <a href="{{ route('client') }}" class="btn btn-xs btn-primary">Volver</a>
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Type</th>
                    <th>Register</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->full_name }}</td>
                        <td>{{ $client->phone_number }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->address }}</td>
                        <td>{{ $client->type }}</td>
                        <td>{{ $client->register }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection