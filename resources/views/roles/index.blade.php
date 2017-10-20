@extends('master')

@section('content')
<div class="row mt-3">
    <div class="col">
        <h1 class="mb-4">Liste des rôles</h1>
        <h6><a class="nav-link" href="{{ route('roles.deleted') }}">Rôles supprimés</a></h6>
        {{--TODO: RAJOUTER GESTION DE RÔLE (ADMIN) POUR LIEN DU DESSUS--}}
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        {{ Form::open(['route' => ['roles.create'], 'method' => 'put'])}}
        {{ Form::button('<i class="fa fa-plus" aria-hidden="true"></i>',['type' => 'submit', 'class' => 'btn btn-dark float-right']) }}
        {{ Form::close() }}
        <table class="table">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listRoles as $position => $record)
                <tr>
                    <td scope="row">{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>
                        {{ Form::open(['route' => ['roles.edit',$record->id], 'method' => 'put'])}}
                        {{ Form::button('<i class="fa fa-pencil" aria-hidden="true"></i>',['type' => 'submit', 'class' => 'btn btn-dark']) }}
                        {{ Form::close() }}
                    </td>
                    <td>
                        {{ Form::open(['route' => ['roles.delete',$record->id], 'method' => 'put'])}}
                        {{ Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>',['type' => 'submit', 'class' => 'btn btn-dark']) }}
                        {{ Form::close() }}
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
