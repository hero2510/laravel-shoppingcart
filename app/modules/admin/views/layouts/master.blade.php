<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Laravel 4 - Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Le styles -->
		<link href="{{ asset('/public/libraries/bootstrap/css/bootstrap.css') }}" media="screen" rel="stylesheet" type="text/css">
		<link href="{{ asset('/public/styles/admin.css') }}" media="screen" rel="stylesheet" type="text/css">
	</head>
<body>
	<div role="navigation" class="navbar navbar-fixed-top navbar-inverse">
		@include('admin::partials.navbar')
	</div>
	<div class="container">
		<div class="row navigation-container">
			@include('admin::partials.menu')
		</div>
		<div class="row breadcrumbs-container">
			{{ Breadcrumbs::renderIfExists() }}
		</div>
		<div class="row content-container">
			@yield('content')
		</div>
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
