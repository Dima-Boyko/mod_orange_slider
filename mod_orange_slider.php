<?php
/*
*Имя приложения: Слайдер Orange Slider
*Версия:1
*Автор:Boyko Dmitry
*Дата:25.04.2018
*Описание: сладйре использует анимации JS библиотеки Slider Dix
 */
defined('_JEXEC') or die('Restricted access');
require_once dirname(__FILE__) . '/helper.php';//Подключаем файл
//Подключение JS И CSS
$doc = JFactory::getDocument();
$doc->addStyleSheet('modules/mod_orange_slider/face/slider_dix/styles.css'); 
//$doc->addScript('modules/mod_orange_slider/face/jquery-3.3.1.min.js');    
$doc->addScript('modules/mod_orange_slider/face/slider_dix/slider_dix.js');    
//
$Images=Helper::getImages($params);
$Style=Helper::getStyle($params);
$ButView=Helper::getButtonView($params);
//
$adaptive="'no'";//фиксированый размер
if($params['AutoSize']==1)$adaptive="'yes'";//выключена адаптивность


// подключаем шаблон
require(JModuleHelper::getLayoutPath('mod_orange_slider'));




