<?php
	$namehost = 'db4free.net';
	$userhost = 'thienht1997tt';
	$passhost = 'thien123';
	$database = 'easychatbox';

	// Lệnh kết nối tới database
	$cn = mysqli_connect($namehost, $userhost, $passhost, $database);

	// Nếu kết nối database thất bạn sẽ báo lỗi
	if (!$cn)
	{
		echo 'Could not connect to database.';
	}
?>