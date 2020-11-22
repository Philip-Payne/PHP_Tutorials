<?php
// Function List

/**
Name: get_content
Description:	Gets the appropriate page content based on the "page" GET var. The
				content files are in the pages subdirectory.
Parameter: void
Return: void
*/

function get_content () {

	if (isset($_GET['page'])) {
		$pageContent = $_GET['page'] . ".php";
		include "pages/$pageContent";
	} else {
		// Default to the home page if nothing is set
		include "pages/home.php";
	}

}






/**
Name: 
Description:	
Parameter: 
Return:
*/

?>