<?php

Breadcrumbs::register('home', function($breadcrumbs){
	$breadcrumbs->push('Home', route('home'));
});

Breadcrumbs::register('users', function($breadcrumbs){
	$breadcrumbs->parent('home');
	$breadcrumbs->push('User', route('users'));
});
