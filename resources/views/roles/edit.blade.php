@extends('master')

@section('content')
<h1 class="mb-4">Modification d'un rôle</h1>
<div class="row mt-3 justify-content-md-center">
    <div class="col-9 border border-dark p-4">
        {{ Form::open(['route' => ['roles.update',$role->id], 'method' => 'post']) }}
        <div class="form-group row justify-content-md-center">
            {{ Form::label('name','Nom', ['class' => 'col-2 col-form-label']) }}
            {{ Form::text('name', $role->name, ['class' => 'col-3 form-control']) }}
        </div>
        <div class="form-group row justify-content-md-center pt-2">
            <div class="col-2">
                <a href="{{ url('/role') }}" class="btn btn-dark">
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
