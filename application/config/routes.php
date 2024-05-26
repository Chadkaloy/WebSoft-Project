<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//=========================================================
//users
//=========================================================
$route['view'] = 'users/view';
$route['create'] = 'users/create';
$route["addUser"] = "users/addUser";
$route["edit"] = "users/edit";
$route['update'] = 'users/update';
$route['users'] = 'users/index';
$route['users/(:any)'] = 'users/view/$1';
//=========================================================
//volume
//=========================================================
$route['view_volume'] = 'volumes/view';
$route['create_volume'] = 'volumes/create';
$route["addVolume"] = "volumes/addVolume";
$route["edit_volume"] = "volumes/edit";
$route['update_volume'] = 'volumes/update';
$route['volumes'] = 'volumes/index';
$route['volumes/(:any)'] = 'volumes/view/$1';
//=========================================================
//authors
//=========================================================
$route['view_author'] = 'authors/view';
$route['create_author'] = 'authors/create';
$route["addAuthor"] = "authors/addAuthor";
$route["edit_author"] = "authors/edit";
$route['update_author'] = 'authors/update';
$route['authors'] = 'authors/index';
$route['authors/(:any)'] = 'authors/view/$1';
//=========================================================
//articles
//=========================================================
$route['view_article'] = 'articles/view';
$route['create_article'] = 'articles/create';
$route["addArticle"] = "articles/addArticle";
$route["edit_article"] = "articles/edit";
$route['update_article'] = 'articles/update';
$route['articles'] = 'articles/index';
$route['articles/(:any)'] = 'articles/view/$1';
//=========================================================
//public pages
//=========================================================
$route['public_articles'] = 'publicpages/articles';
$route['public_volume'] = 'publicpages/volume';
$route['public_authors'] = 'publicpages/authors';
$route['aboutUs'] = 'publicpages/aboutus';
$route['publicpages'] = 'publicpages/index';
$route['publicpages/(:any)'] = 'publicpages/index/$1';
//=========================================================
//roles
//=========================================================
$route['view_roles'] = 'roles/view';
$route['create_roles'] = 'roles/create';
$route['addRoles'] = 'roles/addRoles';
$route['edit_roles'] = 'roles/edit';
$route['update_roles'] = 'roles/update';
$route['roles'] = 'roles/index';
$route['roles/(:any)'] = 'roles/index/$1';

$route['login'] = 'authentication/login';
$route['signup'] = 'authentication/signup';


$route['admin'] = 'pages/view/home';
$route['default_controller'] = 'publicpages/index';
$route['(:any)'] = 'pages/view/$1';




