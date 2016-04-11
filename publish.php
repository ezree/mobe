<?php

// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array
if (empty($_POST['editor']))
    echo 'Error : No content to display !';
else 
	echo $_POST['editor'];

?>