<?php
	if(isset($_SESSION['message']))
	{
		$message = $_SESSION['message'];
		unset($_SESSION['message']);
	
?>
	<div id="messageBox"><?=$message?></div>
<?php
	}
	if(isset($_SESSION['exception']))
	{
		$exception = $_SESSION['exception'];
		unset($_SESSION['exception']);
?>
	<div id="exceptionBox"><?=$exception?></div>
<?php
	}

	if(isset($_SESSION['notification']))
	{
		$notification = $_SESSION['notification'];
		unset($_SESSION['notification']);
?>
	<div class="notificationBox"><?=$notification?></div>
<?php
	}
?>