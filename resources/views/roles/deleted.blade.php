@extends('master')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h1 class="mb-4">Liste des rôles supprimés</h1>
        <h6><a class="nav-link" href="{{ route('roles.index') }}">Retour au listing</a></h6>
    @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <table class="table">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Annuler suppression</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listRoles as $position => $record)
                <tr>
                    <td scope="row">{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>
                        {{ Form::open(['route' => ['roles.revert',$record->id], 'method' => 'put'])}}
                        {{ Form::button('<i class="fa fa-undo" aria-hidden="true"></i>',['type' => 'submit', 'class' => 'btn btn-dark']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
