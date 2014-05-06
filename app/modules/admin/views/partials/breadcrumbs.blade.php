<?php

Breadcrumbs::register('home', function($breadcrumbs){
	$breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('users', function($breadcrumbs){
	$breadcrumbs->push('User', route('users'));
});
