@extends('master')

@section('content')
<div class="row mt-3">
	<div class="col">
		<h1 class="mb-4">Liste des utilisateurs</h1>
		<table class="table">
		    <thead class="thead-inverse p-1">
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
		            <td scope="row">{{ $record->id }}</td>
		            <td>{{ $record->fullname }}</td>
		            <td>{{ $record->email }}</td>
		            <td>{{ $record->role->name }}</td>
		            <td>{{ $record->team->name }}</td>
		            <td class="text-center">
		            	{{ Form::open(['route' => ['users.edit',$record->id], 'method' => 'get'])}}
		                {{ Form::button('<i class="fa fa-pencil" aria-hidden="true"></i>',['type' => 'submit', 'class' => 'btn btn-dark']) }}
		                {{ Form::close() }}
		            </td>
		        </tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</div>
@stop