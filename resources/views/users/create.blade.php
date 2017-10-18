@extends('master')

@section('content')

{{ Form::open(['route' => ['users.store'], 'method' => 'post']) }}
<div>
    {{ Form::label('fullname','Nom') }}
    {{ Form::text('fullname') }}
</div>

<div>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email') }}
</div>

<div>
    {{ Form::label('team_id', 'Pôle') }}
        {{ Form::select('team_id', $listTeam, ['placeholder' => 'Selectionner une équipe']) }}
</div>

<div>
    {{ Form::label('role_id', 'Accréditation') }}
    {{ Form::select('role_id', $listRole, ['placeholder' => 'Selectionner une accréditation']) }}
</div>
{{ Form::submit('Enregistrer',['class' => 'btn btn-primary col']) }}
{{ Form::close() }}
@stop

