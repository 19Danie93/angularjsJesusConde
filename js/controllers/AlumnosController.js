/**
 * Created by Edward on 11/14/2014.
 */
function AlumnosController($scope) {
    $scope.alumnos = [
        {nombre:"Juan Blanco", telefono: "123456",curso:"Segundo ESO"},
        {nombre:"Rosa Luxemburgo",telefono: "0135654", curso:"Primero ESO"},
        {nombre:"Pepe Cachito",telefono: "3667689", curso:"Tercero ESO"},
        {nombre:"Juan Zorro",telefono: "567893345", curso:"Cuarto ESO"},
    ];

    $scope.Save = function() {
        $scope.alumnos.push({
            nombre:$scope.nuevoAlumno.nombre,
            telefono:$scope.nuevoAlumno.telefono,
            curso:$scope.nuevoAlumno.curso
        });

        $scope.formVisibility=false;
        console.log($scope.formVisibility);
    }

    $scope.formVisibility=false;

    $scope.ShowForm = function() {
        $scope.formVisibility=true;
        console.log($scope.formVisibility)
    }
}

