<?php
/*
 * Переопределение (добавление своих или замена существующих) функций сущости Topic
 */
class PluginAdvuser_ModuleOverride_EntityUser extends PluginAdvuser_Inherit_ModuleUser_EntityUser
{
/**
	 * Определяем правила валидации
	 *
	 * @var array
	 */
	protected $aValidateRules=array(
		array('profile_name','string','allowEmpty'=>false,'min'=>5, 'on'=>array('registration','')),
		array('login','login','on'=>array('registration','')), // '' - означает дефолтный сценарий
		array('login','login_exists','on'=>array('registration')),
		array('mail','email','allowEmpty'=>false,'on'=>array('registration','')),
		array('mail','mail_exists','on'=>array('registration')),
		array('captcha','captcha','on'=>array('registration')),
		array('password','string','allowEmpty'=>false,'min'=>5,'on'=>array('registration')),
		array('password_confirm','compare','compareField'=>'password','on'=>array('registration')),
	);
}

?>
