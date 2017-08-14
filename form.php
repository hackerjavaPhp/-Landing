<?php

if(strlen($_POST['name']) > 1 &&  preg_match( '/^[^@]+@.*.[a-z]{2,15}$/i', $_POST['email']) && strlen($_POST['subject']) > 1 && strlen($_POST['textarea']) > 3)
{
	mail($_POST['email'],$_POST['subject'],$_POST['textarea'],"NAME:" . $_POST['name']);
	header("Location: index.html"); exit;
}