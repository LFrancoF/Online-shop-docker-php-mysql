<?php

//Ruta base de la app
const BASE_URL = "http://localhost/";

//Zona horaria
date_default_timezone_set("America/La_Paz");

//Datos de conexion a la BD
const DB_HOST = "db";  //nombre del servicio Mysql definido en el docker compose
const DB_NAME = "online_shop";
const DB_USER = "gustavo";
const DB_PASSWORD = "gpass";
const DB_CHARSET = "charset=utf8";

//Delimitadores decimal y de miles -> 24,150.00
const SPD = ".";    //decimal
const SPM = ",";    //mil

//Simbolo moneda
const SMONEY = "Bs";