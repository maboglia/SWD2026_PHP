<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php intesta_pagina(); ?></title>


</head>

<body>

    <?php

    class Studente{

        

    }


    function intesta_pagina() {

        echo "Sono la pagina intestata";


    }

    function addizione($a, $b){

        return $a + $b;
    }

    echo addizione(5, 10);


    ?>


    <h3><?php intesta_pagina(); ?></h3>


</body>

</html>