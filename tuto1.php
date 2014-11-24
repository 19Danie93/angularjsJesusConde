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
    <title>Modelo en Scope</title>
</head>
<body ng-controller="AlumnoController">
{{alumno.nombre}} estudia {{alumno.curso}}
<script src="js/angular.min.js" type="text/javascript"></script>
<script type="text/javascript">
    function AlumnoController($scope) {
        $scope.alumno = {
            nombre: "Juan Blanco",
            curso: "3ero ESO"
        }
    }
</script>

</body>
</html>