<?php
include ("CStaticPropValues.php");
class Proto{
	/*Storage for static properties*/
	public static $_storage;
	/* 
	Initializing the base class
	*/
	public static function init(){
		static::$_storage=new \alldali\utils\CStaticPropValues();
	}
	/*
	Setting a static property
	*/
	public static function setStaticProp($p_storage_value){
		static::$_storage->addPropsInClass(static::class,$p_storage_value);
	}
	/*
	Getting a static property
	*/
	public static function getVoice(){
		$v=static::$_storage->getPropsOfClass(static::class);
		echo "<br>".static::class."=".$v;
	}
}
class B extends Proto{
}
class C extends Proto{
}

class B_D extends B{
}
Proto::init();

$hi="i am static prop of  ";
Proto::setStaticProp($hi." class Proto");
B::setStaticProp($hi." class B");
C::setStaticProp($hi." class C");
B_D::setStaticProp($hi." class B_D");
Proto::getVoice();
B::getVoice();
C::getVoice();
B_D::getVoice();


?>