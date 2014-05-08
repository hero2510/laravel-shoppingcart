@extends('admin::layouts.master')
@section('content')
	{{ Session::has('success') ? '<div class="alert alert-success">' . Session::get('success') .'</div>' : '' }}
	<?php
		if(!empty($modules)){
			foreach($modules as $module){
				?>
		<div style="margin-bottom: 10px" class="col-sm-12 col-md-6 col-lg-3"><a href="javascript:void(0)" class="btn btn-info" style="width:90%">{{ $module['name'] }}</a></div>
				<?php
			}
		}
	?>
@stop