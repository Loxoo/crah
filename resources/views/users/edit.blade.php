@extends('master')

@section('content')

{{ Form::select('teams', $listTeam, $user->team->id, ['placeholder' => 'Selectionner une équipe']) }}
{{ Form::select('roles', $listRole, $user->role->id, ['placeholder' => 'Selectionner une accréditation']) }}

@stop