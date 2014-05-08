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

	/* Resources */
Breadcrumbs::register('resources', function($breadcrumbs){
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Resource', route('resources'));
});

Breadcrumbs::register('modify_resource', function($breadcrumbs){
	$breadcrumbs->parent('resources');
	$breadcrumbs->push('Modify Resource', route('modify_resource'));
});
Breadcrumbs::register('modify_resource.post', function($breadcrumbs){
	$breadcrumbs->parent('resources');
	$breadcrumbs->push('Modify Resource', route('modify_resource.post'));
});
