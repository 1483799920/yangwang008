<?php
	//����sae���ݿ�
	/*$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS) or die("�޷��������ݿ�");
	mysql_query("SET NAMES 'UTF8'");
	mysql_select_db(SAE_MYSQL_DB ,$conn) or die ("�Ҳ�������Դ");
	echo 'Connected OK!';*/
	
	
	$array = array('id'=>'1','username'=>'lazypeople');
	header('Content-type: text/json');
	$json = json_encode($array);
	echo($json);
?>