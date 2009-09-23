<?php
ob_start(); /* template body */ ?>test.tpl<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>