<?php
/*
*Имя приложения: Orange Slider
*Версия:1
*Автор:Boyko Dmitry
*Дата:25.04.2018
*Описание:шаблон для слайдера
*/
defined('_JEXEC') or die;
$Auto=$params['AutoInterval'];
if($params['AutoMove']==0)$Auto=0;
//Сортровка по убыванию
if($params['Sort']=='dsc'){
	rsort($res);
}
//
$sliderClass='';
switch ($params['Style']) {
    case 'move':
        $sliderClass='slider-dix';
        break;
    case 'extinction':
        $sliderClass='SliderDO';
        break;
    case 'transition':
        $sliderClass='SliderDE';
        break;
}
?>
<?php if($params['BodyScript']==1)://включить скрипт в тело документа?>
<script src="/modules/mod_orange_slider/face/slider_dix/slider_dix.js"></script>
<?php endif;?>

<div class="OrangeSlider SliderDIX_<?=$module->id?> <?=$sliderClass?>" <?=$Style?> >
<?php
if(count($Images)>0){
	foreach($Images as $image){
		?>
		<img src="/<?=$image?>" alt="<?=$image?>">	
		<?php
	}
}
?>
</div>
<script language="JavaScript" type="text/javascript">
	<?php if($params['Style']=='move'):?>
	jQuery('.SliderDIX_<?=$module->id?>').SliderDIX({'interval':<?=$params['SpeedInterval']?>,'auto':<?=$Auto;?>,'adaptive':<?=$adaptive;?><?=$ButView;?>}) ;
	<?php endif;?>
	<?php if($params['Style']=='extinction'):?>
	jQuery('.SliderDIX_<?=$module->id?>').SliderDO({ 'interval':<?=$params['SpeedInterval']?>,'auto':<?=$Auto;?>,'adaptive':<?=$adaptive;?><?=$ButView;?>}) ;
	<?php endif;?>
	<?php if($params['Style']=='transition'):?>
	jQuery('.SliderDIX_<?=$module->id?>').SliderDExtinction({'interval':<?=$params['SpeedInterval']?>,'auto':<?=$Auto;?>,'adaptive':<?=$adaptive;?><?=$ButView;?>}) ;
	<?php endif;?>
</script>
