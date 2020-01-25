<?php
namespace alldali\utils;
/**
класс реализует механизм хранения одноименных статических
свойств с разными значениями в иерархии классов
*/
class  CStaticPropValues{
	// массив классов
	public static $_classes=array();
	/*
	добавляет в в массив $_classes новый класс $p_className с массивом (обьектом) статических свойств
	*/
	public static function addPropsInClass(string $p_className, $p_prop){
		static::$_classes[$p_className]=$p_prop;
	}
	/*
	возвращает массив (объект) со списком статических свойств
	*/
	public static function getPropsOfClass(string $p_className){
		return static::$_classes[$p_className];
	}
	/*
	возвращает структуру фреймвораа
	*/
	public static function getClassesStruct(){
		return static::$_classes;
	}
	
}
?>