<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
	$message = "";

	foreach ($_POST as $key => $value) {
		if ( $value !== '') {
			$message .= $key.': '.$value."\n";
		}
	}

	mail('roodolff@mail.ru','Заявка с сайта', $message);

	/*$str = 'http://sms.ru/sms/send?api_id=ab7a00fb-e15e-93c4-05b5-0e0rec8a4bab7&to=79370118091&text='
	. str_replace(' ','%20',$_POST['Заголовок']) . '+' . str_replace(' ','%20',$_POST['Телефон']);
	
	$homepage = file_get_contents($str);*/

	echo 'OK';
}
?>