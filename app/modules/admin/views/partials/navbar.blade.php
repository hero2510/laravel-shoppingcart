<div class="container">
	<div class="navbar-header">
		<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand glyphicon glyphicon-home" target="_blank" href="{{ Request::root() }}"> CMS</a>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
			<li></li>
            <li><a class="glyphicon glyphicon-user" href="#about"> Admin</a></li>
			<li><a class="glyphicon glyphicon-log-out" href="/admin/auth/logout"> Logout</a></li>
		</ul>
	</div><!-- /.nav-collapse -->
</div>