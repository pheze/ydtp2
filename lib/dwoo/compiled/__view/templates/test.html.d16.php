<?php
ob_start(); /* template body */ ;
 /* end template body */
return $this->buffer . ob_get_clean();
?>