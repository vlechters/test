<?php

const ROLE_CLIENT      = 0;
const ROLE_ADMIN       = 1;
const ROLE_SUPER_ADMIN = 2;



function checkCredentials(array $validRoles)
{
    //check if user is logged in
    if(false == isset($_SESSION['id'])){

        //redirect and bail method immediately
        header('location: logout.php');
        return false;
    }

    //check if credentials match
   
	
    if(false == isset($_SESSION['rollen']) || false == in_array($_SESSION['rollen'], $validRoles)) {

        // redirect and bail immediately
        header('location: home.php');
        return false;
    }

    return true;
}
?> 
