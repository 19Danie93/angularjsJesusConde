<?php
/**
 * Created by PhpStorm.
 * User: lvelasquez
 * Date: 11/23/14
 * Time: 7:57 PM
 */
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(function () {
        //My json
        var family = [
            {
                "name" : "Jason",
                "age" : "24",
                "gender" : "male",
                "id" : 1,
                "grado" : "primero"
            },
            {
                "name" : "Kyle",
                "age" : "21",
                "gender" : "male",
                "id" : 2,
                "grado" : "primero"
            },
            {
                "name" : "Brenda",
                "age" : "23",
                "gender" : "female",
                "id" : 3,
                "grado" : "segundo"
            },
            {
                "name" : "Kaxator",
                "age" : "150",
                "gender" : "alien",
                "id" : 4,
                "grado" : "tercero"
            },
            {
                "name" : "Drogui Jr",
                "age" : "54",
                "gender" : "male",
                "id" : 5,
                "grado" : "primero"
            }];
        //variables para filas de tabla
        var tr = "";
        //contendra los diferentes generos que hay
        var uniqueGender = [];
        var uniqueGrado = [];

        //Loop para el json buscando diferentes generos y agregarlo al arreglo uniqueGender
        $.each(family, function(i, el){
            if($.inArray(el["gender"], uniqueGender) === -1) {
                uniqueGender.push(el["gender"]);
                uniqueGrado.push(el["grado"]);

            }
        });

        //Creando filas para diferentes generos
        $.each( uniqueGender, function( i, el ) {
            //inicializando fila
            tr += "<tr><td>"+ el +"</td><td>"+ uniqueGrado[i] +"</td>";
            //loop interno para compara el genero del json con el del loop externo
            $.each( family, function( it, element ) {
                // si el genero es el mismo lo agrega a esta fila
                if(element["gender"] == el){
                    tr += "<td>" + element['name'] + "</td>" ;
                }
            });
            //se cierra fila con los mismos generos
            tr += "</tr>";
        });

        //agregando a tabla las filas
        $( "#tbody" ).append( tr );

    })
</script>
<div id="content">
    <table>
        <thead>
        <tr>
            <th>GENERO</th>
            <th>GRADO</th>
            <th>NOMBRE</td>
        </tr>
        </thead>
        <tbody id="tbody">

        </tbody>
    </table>
</div>