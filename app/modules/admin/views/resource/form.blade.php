@extends('admin::layouts.master')
@section('content')
	{{ Form::model($resource, array('url' => URL::route('modify_resource', array('id' => $id)), 'method' => 'post', 'resource' => 'form', 'class' => 'form-horizontal')) }}
		<input type="hidden" name="id" value="{{ $id }}">
		<div class="form-group">
			{{ Form::label('parent', 'Module', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select(
					'parent',
					$modules,
					null,
					array('class' => 'form-control input-sm', 'style' => 'width: 20%')) }}
			</div>
		</div>		
		<div class="form-group">
			{{ Form::label('title', 'Title', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('title', null, array('class' => 'form-control input-sm', 'style' => 'width: 20%')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('name', 'Resource', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('name', null, array('class' => 'form-control input-sm', 'style' => 'width: 20%')) }}
			</div>
		</div>
		<div  class="form-group">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				{{ Form::submit('Submit', array('name' => 'ok', 'class' => 'btn btn-danger')) }}
			</div>
		</div>
	{{ Form::close() }}
@stop