<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Laravel 4 - Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Le styles -->
		<link href="{{ Request::root() }}/public/libraries/bootstrap/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css">
		<link href="{{ Request::root() }}/public/styles/admin.css" media="screen" rel="stylesheet" type="text/css">
	</head>
<body>
	<div role="navigation" class="navbar navbar-fixed-top navbar-inverse">
		@include('admin::partials.navbar')
	</div>
	<div class="container">
		{{ Breadcrumbs::render() }}
		@yield('content')
	</div>
</body>
<!--[if lt IE 9]><script type="text/javascript" src="http://odcvoyage.com/js/html5.js"></script><![endif]-->
<script type="text/javascript" src="{{ Request::root() }}/public/libraries/jquery/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="{{ Request::root() }}/public/libraries/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
        var _module = 'admin';
        var $app = {
	                'module': _module,
	                'controller':'index',
	                'action':'index'
	            };
        </script>
		<script type="text/javascript" data-main="http://odcvoyage.com/js/admin/main-backbone" src="http://odcvoyage.com/lib/require.js"></script>
</html>
