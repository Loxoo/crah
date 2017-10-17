@extends('master')

@section('content')
<h1>Liste d'utilisateur</h1>
<table class="table">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Accréditation</th>
            <th>Pôle</th>
            <th>Modification</th>
        </tr>
    </thead>
    <tbody>
        @foreach($listUsers as $position => $record)
        <tr>
            <td>{{ $record->id }}</td>
            <td>{{ $record->fullname }}</td>
            <td>{{ $record->email }}</td>
            <td>{{ $record->role->name }}</td>
            <td>{{ $record->team->name }}</td>
            <td>{{ Form::open(['route' => ['users.edit',$record->id], 'method' => 'get'])}}
                {{ Form::submit('Editer',['class' => 'btn btn-primary col']) }}
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop