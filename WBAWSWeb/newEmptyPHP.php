<?php

include './db/dbConnection.php';

 $db = new dbConnection();
 
 $db->RunQuery("SELECT CURDATE( )");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

