@extends('master')

@section('content')
<h1 class="mb-4">Modification d'un utilisateur</h1>
<div class="row mt-3 justify-content-md-center">
    <div class="col-9 border border-dark p-4">
        {{ Form::open(['route' => ['users.update',$user->id], 'method' => 'post']) }}
        <div class="form-group row justify-content-md-center">
            {{ Form::label('fullname','Nom', ['class' => 'col-2 col-form-label']) }}
            {{ Form::text('fullname', $user->fullname, ['class' => 'col-3 form-control']) }}
        </div>

        <div class="form-group row justify-content-md-center">
            {{ Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label']) }}
            {{ Form::text('email', $user->email, ['class' => 'col-sm-3 form-control']) }}
        </div>

        <div class="form-group row justify-content-md-center">
            {{ Form::label('team_id', 'Pôle', ['class' => 'col-sm-2 col-form-label']) }}
            {{ Form::select('team_id', $listTeam, $user->team->id, ['placeholder' => 'Selectionner une équipe', 'class' => 'col-sm-3 form-control']) }}
        </div>

        <div class="form-group row justify-content-md-center">
            {{ Form::label('role_id', 'Accréditation', ['class' => 'col-sm-2 col-form-label']) }}
            {{ Form::select('role_id', $listRole, $user->role->id, ['placeholder' => 'Selectionner une accréditation', 'class' => 'col-sm-3 form-control']) }}
        </div>
        <div class="form-group row justify-content-md-center pt-2">
            <div class="col-2">
                <a href="{{ url('/user') }}" class="btn btn-dark">
                    <i class="fa fa-btn fa-arrow-left"></i> Retour
                </a>
            </div>
            <div class="col-2">
                {{ Form::button('<i class="fa fa-btn fa-floppy-o"></i> Enregistrer',['type' => 'submit', 'class' => 'btn btn-dark']) }}
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@stop
