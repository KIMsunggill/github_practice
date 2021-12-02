<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	interface Interface01
	
	{
	}
	class Class01
	
	{
	}
	class Class02 extends Class01 implements Interface01
	
	{
	}
	class Class03 extends Class01
	
	{
	}
	
	/* 어떤 클래스(class)에서 생성된 객체(object)인지를 확인할 때 */
	$var_01 = new Class01; // Class01 클래스 객체를 생성함.
	var_dump($var_01 instanceof Class01);     // true
	var_dump($var_01 instanceof Class01);     // false
	echo "<br>";
	 
	
	/* 부모 클래스(parent class)에서 상속받은 클래스인지를 확인할 때 */
	$var_02 = new Class02; // Class02 클래스 객체를 생성함.
	var_dump($var_02 instanceof Class01);     // true
	var_dump($var_02 instanceof Class02);     // true
	echo "<br>";
	 
	
	/* 클래스의 인스턴스(instance)인지 아닌지를 확인할 때 */
	$var_03 = new Class01; // Class01 클래스 객체를 생성함.
	var_dump(!($var_03 instanceof Class02));  // true
	echo "<br>";

	/* 인터페이스(interface)로 구현한 클래스의 객체 인스턴스(object instance)인지 아닌지를 확인할 때 */
	$var_04 = new Class02; // Class02 클래스 객체를 생성함.
	var_dump($var_04 instanceof Class02);     // true
	var_dump($var_04 instanceof Interface01); // true
	echo "<br>";
	
	$var_05 = new Class03;
	var_dump($var_05 instanceof Class01);     
	var_dump($var_05 instanceof Interface01); 
	echo "<br>" 
	?>
</body>
</html>
