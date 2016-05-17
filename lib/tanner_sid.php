<?php



function generate_sid($length=6) {
   return strtoupper(substr(md5(uniqid()),0,$length));
}


//echo generate_sid();

?>
