<?php
	
	echo output("Hallo", "/");
	
	function output($input, $wrap) : string{
		return "$wrap$input$wrap";
	}