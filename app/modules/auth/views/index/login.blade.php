<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Laravel 4 - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Le styles -->
		<link href="{{ asset('/public/libraries/bootstrap/css/bootstrap.css') }}" media="screen" rel="stylesheet" type="text/css">
		<link href="{{ asset('/public/styles/admin.css') }}" media="screen" rel="stylesheet" type="text/css">
	</head>
<body>
	<div class="container" style="width: 300px">
		{{ Form::open(array('class' => 'form-horizontal', 'role' => 'form')) }}
			<div class="form-group">
				{{ Form::label('username', 'Username', array('class' => 'col-sm-4 control-label')) }}
				<div class="col-sm-8">
					{{ Form::text('username', null, array('class' => 'form-control')) }}
				</div>
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Password', array('class' => 'col-sm-4 control-label')) }}
				<div class="col-sm-8">
					{{ Form::password('password', array('class' => 'form-control')) }}
				</div>
			</div>
			<div class="col-sm-4">
				{{ Form::submit('Login', array('name' => 'login', 'class' => 'btn btn-danger')) }}
			</div>
		{{ Form::close() }}
	</div>
</body>
<!--[if lt IE 9]><script type="text/javascript" src="http://odcvoyage.com/js/html5.js"></script><![endif]-->
<script type="text/javascript" src="{{ asset('/public/libraries/jquery/jquery-2.0.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/public/libraries/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript">
  var $app = {
      'module': "{{ $currentMvc['module'] }}",
      'controller': "{{ $currentMvc['controller'] }}",
      'action': "{{ $currentMvc['action'] }}"
  };
	var base_url = '{{ Request::root() }}';
</script>
<script type="text/javascript" data-main="{{ asset('/public/libraries/admin/main-backbone') }}" src="{{ asset('/public/libraries/require.js?v=' . time()) }}"></script>
</html>
