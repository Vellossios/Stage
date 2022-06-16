<?php

function databaseConnect() 
{
    /*connection a la base de donnée*/
    return new mysqli("localhost", "root", "", "test");
} 
