@extends('admin::layouts.master')
@section('content')
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
				<a type="button" title="edit" href="{{ Request::root() }}/admin/roles/modify/{{ $role->id }}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a> 
				<a type="button" title="edit" href="{{ Request::root() }}/admin/roles/delete/{{ $role->id }}" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
			</td>
		</tr>

					<?php
				}
			}
		?>
	</table>
@stop