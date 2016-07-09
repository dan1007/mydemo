<?php

require ("mysql_config.php");
/**
 * 模板设计模式
 * 
 * 变得作为参数传入
 * 不变都写进函数
 */
function mySqlSelect($sql, $fn) {
	//通过 $GLOBALS["去掉$的变量名"] 访问全局变量
	//连接数据库
	$con = mysql_connect($GLOBALS["MYSQL_SERVICE"], $GLOBALS["MYSQL_USERNAME"],$GLOBALS["MYSQL_USERPASSWORD"]);
	// 判断是否连接成功
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	//选择数据库
	mysql_select_db($GLOBALS["MYSQL_DATABASE"]);
	mysql_query("SET NAMES utf8"); 
	//执行SQL
	$r = mysql_query($sql);
	//将结果集传入外部函数中, 在外部函数进行解析操作, 见 login2.php 与 connectMySQL2.php
	$fn($r);
	//释放结果集
	mysql_free_result($r);
	
	//关闭连接
	mysql_close($con);
}
//function selectOne($sql){
	//$fn -> 逻辑代码改为只查出一行数据
	//mySqlSelect($sql, $fn)
//}
?>
