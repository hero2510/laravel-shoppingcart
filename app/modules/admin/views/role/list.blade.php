@extends('admin::layouts.master')
@section('content')
	{{ Session::has('success') ? '<div class="alert alert-success">' . Session::get('success') .'</div>' : '' }}
	<a class="btn btn-primary" style="margin-bottom: 10px" href="{{ URL::route('modify_resource') }}">Add New</a>
	<table class="table table-striped">
		<tr>
			<th style="text-align: center"><input type="checkbox"></th>
			<th>Order</th>
			<th>Roles</th>
			<th>Action</th>
		</tr>
		<?php 
			if(!empty($roles)){
				foreach($roles as $role){
					?>
		<tr>
			<td align="center"><input type="checkbox"></td>
			<td>{{{ $role->id }}}</td>
			<td>{{{ $role->name }}}</td>
			<td>
				<a type="button" title="Edit" href="{{ Request::root() }}/admin/permissions/roles/modify/{{ $role->id }}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a>
				<a type="button" title="Grant Access" href="/admin/permissions/roles/grant-access/{{ $role->id }}" class="btn btn-warning btn-sm glyphicon glyphicon-lock"></a>
				<a type="button" title="Delete" href="{{ Request::root() }}/admin/permissions/roles/delete/{{ $role->id }}" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
			</td>
		</tr>

					<?php
				}
			}
		?>
	</table>
@stop