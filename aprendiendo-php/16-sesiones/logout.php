<?php

//Iniciar la sesion
session_start();

echo $_SESSION['variable_persistente']. "<br>";

//Cierra sesion 
session_destroy();