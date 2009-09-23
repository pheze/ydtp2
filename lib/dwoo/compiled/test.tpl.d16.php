<?php
ob_start(); /* template body */ ?><html>
	<body>
		<h1><?php echo $this->scope["a"];?></h1>
		<p><?php echo $this->scope["b"];?></p>
	</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>