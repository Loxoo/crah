@extends('master')

@section('content')
<h1 class="mb-4">Edition de l'utilisateur {{ $user->fullname }}</h1>

{{ Form::open(['route' => ['users.update',$user->id], 'method' => 'post']) }}
<div>
    {{ Form::label('fullname','Nom') }}
    {{ Form::text('fullname', $user->fullname) }}
</div>

<div>
    {{ Form::label('email', 'Email') }}
    {{ Form::text('email', $user->email) }}
</div>

<div>
    {{ Form::label('team_id', 'Pôle') }}
    {{ Form::select('team_id', $listTeam, $user->team->id, ['placeholder' => 'Selectionner une équipe']) }}
</div>

<div>
    {{ Form::label('role_id', 'Accréditation') }}
    {{ Form::select('role_id', $listRole, $user->role->id, ['placeholder' => 'Selectionner une accréditation']) }}
</div>
{{ Form::submit('Appliquer',['class' => 'btn btn-primary col']) }}
{{ Form::close() }}
@stop