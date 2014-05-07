<?php
Menu::handler('main', array('class' => 'nav navbar-nav'))
    ->add(Request::root() . '/admin', 'Home')
    ->add(Request::root() . '/admin/users', 'Users')
    ->add('#', 'Permission', Menu::items('permission')
        ->add(Request::root() . '/admin/permissions/roles', 'Roles')
        ->add(Request::root() . '/admin/permissions/resources', 'Resources')
        ->add(Request::root() . '/admin/permissions/assign', 'Assign'));

Menu::handler('main')->getItemsAtDepth(0)->map(function($item)
  {
    if($item->hasChildren())
    {
      $item->addClass('dropdown');

      $item->getChildren()
        ->addClass('dropdown-menu');

      $item->getContent()
        ->addClass('dropdown-toggle')
        ->dataToggle('dropdown')
        ->nest(' <b class="caret"></b>');
    }
  });
?>
{{ Menu::handler('main')->render() }}