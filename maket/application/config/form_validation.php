<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array (
	'addcat' => array (
		array(
		        'field' => 'name',
		        'label' => 'Название категории',
		        'rules' => 'required|is_unique[categories.cat_name]'
		     )
		),
	'editcat' => array (
		array(
		        'field' => 'name',
		        'label' => 'Название категории',
		        'rules' => 'required'
		     )
		),
    'editemp' => array (
		array(
		        'field' => 'f_name',
		        'label' => 'Имя',
		        'rules' => 'required'
		     ),
                array(
		        'field' => 'l_name',
		        'label' => 'Фамилия',
		        'rules' => 'required'
		     ) ,
                array(
		        'field' => 'u_address',
		        'label' => 'Адрес',
		        'rules' => 'required'
		     ) ,   
                array(
		        'field' => 'u_mobile',
		        'label' => 'Номер телефона',
		        'rules' => 'required'
		     )    
		),
    'addemp' => array (
                array(
		        'field' => 'u_email',
		        'label' => 'Email',
		        'rules' => 'required|is_unique[users.email]'
		     ),
		array(
		        'field' => 'f_name',
		        'label' => 'Имя',
		        'rules' => 'required'
		     ),
                array(
		        'field' => 'l_name',
		        'label' => 'Фамилия',
		        'rules' => 'required'
		     ) ,
                array(
		        'field' => 'u_address',
		        'label' => 'Адрес',
		        'rules' => 'required'
		     ) ,   
                array(
		        'field' => 'u_mobile',
		        'label' => 'Номер телефона',
		        'rules' => 'required'
		     )    
		)
    
);
