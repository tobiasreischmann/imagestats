<?php
/**
 * Created by IntelliJ IDEA.
 * User: tore
 * Date: 12.09.16
 * Time: 14:34
 */
OCP\User::checkAdminUser();
$tmpl = new OCP\Template( 'imagestats', 'settings/admin' );
return $tmpl->fetchPage();