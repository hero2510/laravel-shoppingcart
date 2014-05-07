@extends('admin::layouts.master')
@section('content')
	<table class="table table-striped">
		<tr>
			<th style="text-align: center"><input type="checkbox"></th>
			<th>Order</th>
			<th>Username</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php 
			if($users != null){
				foreach($users as $user){
					?>
		<tr>
			<td align="center"><input type="checkbox"></td>
			<td>{{{ $user->id }}}</td>
			<td>{{{ $user->username }}}</td>
			<td>{{{ $user->email }}}</td>
			<td>
				<a type="button" title="edit" href="/admin/users/edit/{{ $user->id }}" class="btn btn-warning btn-sm glyphicon glyphicon-pencil"></a> 
				<a type="button" title="edit" href="/admin/users/delete/{{ $user->id }}" class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a>
			</td>
		</tr>

					<?php
				}
			}
		?>
	</table>
@stop