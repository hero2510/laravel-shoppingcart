@extends('admin::layouts.master')
@section('content')
	{{ Form::model($role, array('route' => 'modify_role', 'method' => 'post', 'role' => 'form', 'class' => 'form-horizontal')) }}
		<div class="form-group">
			{{ Form::label('name', 'Role', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('name', null, array('class' => 'form-control input-sm', 'style' => 'width: 20%')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('name', 'Role', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('name', null, array('class' => 'form-control input-sm', 'style' => 'width: 20%')) }}
			</div>
		</div>
	{{ Form::close() }}
@stop