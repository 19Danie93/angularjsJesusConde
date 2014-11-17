<?php
/**
 * Created by PhpStorm.
 * User: Edward
 * Date: 11/14/2014
 * Time: 11:07 AM
 */ 
?>
<!doctype html>
<html lang="en" ng-app>
<head>
    <meta charset="UTF-8">
    <title>Cuaderno de Alumnos</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body ng-controller="AlumnosController">
    <h1>Cuaderno Alumnos</h1>
    <div class="wrapper">
        <div class="contact-item" ng-repeat="alumno in alumnos | orderBy:'nombre' ">
            <div class="nombre">{{alumno.nombre}} - {{alumno.telefono}}</div>
            <span class="curso">{{alumno.curso}}</span>
        </div>
    </div>
    <script src="js/angular.min.js" type="text/javascript"></script>
    <script src="js/controllers/AlumnosController.js"></script>
</body>
</html>