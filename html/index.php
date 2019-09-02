<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php7.2-apache</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 
  if(mb_send_mail('exsample@hoge.co.jp',"title","body")){
		echo "送信";
	}else{
		echo "失敗";
	} ?>
</body>
</html>