<?php
	$namehost = 'us-cdbr-iron-east-02.cleardb.net';
	$userhost = 'b755ebcddfebe1';
	$passhost = '04ab5383';
	$database = 'heroku_263ee39fb856ff4';

	// Lệnh kết nối tới database
	$cn = mysqli_connect($namehost, $userhost, $passhost, $database);

	// Nếu kết nối database thất bạn sẽ báo lỗi
	if (!$cn)
	{
		echo 'Could not connect to database.';
	}
?>