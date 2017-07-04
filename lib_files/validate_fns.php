<?php

function is_valid_email ($address)
	   { 
    	   return (preg_match( 
        	'/^[-!#$%&\'*+\\.\/0-9=?A-Z^_`{|}~]+'.   
        	'@'.                                     
        	'([-0-9A-Z]+\.)+' .                      
        	'([0-9A-Z]){2,4}$/i',                  
    	    trim($address)));
	    }
		
function is_filled ($field_name) {if(empty($field_name)) { return false; }else { return true; } }		
?>