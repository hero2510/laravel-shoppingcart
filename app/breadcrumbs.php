<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs){
	$breadcrumbs->push('Home', route('home'));
});


// Users
Breadcrumbs::register('users', function($breadcrumbs){
	$breadcrumbs->parent('home');
	$breadcrumbs->push('User', route('users'));
});

// Permission
	/* Roles */
Breadcrumbs::register('roles', function($breadcrumbs){
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Role', route('roles'));
});

Breadcrumbs::register('modify_role', function($breadcrumbs){
	$breadcrumbs->parent('roles');
	$breadcrumbs->push('Modify Role', route('modify_role'));
});
Breadcrumbs::register('modify_role.post', function($breadcrumbs){
	$breadcrumbs->parent('roles');
	$breadcrumbs->push('Modify Role', route('modify_role.post'));
});
