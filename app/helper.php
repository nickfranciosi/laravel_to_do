<?php 


function gravatar_include($email){
	return '<img src="http://www.gravatar.com/avatar/' . md5($email) . '?s=40" alt=" ' . $email . '">';
}

 ?>