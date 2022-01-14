<?php
    $C=$_GET["C"];
     switch ($C) {
        case "1": echo(file_get_contents(1_floor.html)); break;
        case "2": echo(file_get_contents(2_floor.html)); break;
        case "3": echo(file_get_contents(3_floor.html)); break;
        case "4": echo(file_get_contents(4_floor.html)); break;
        case "5": echo(file_get_contents(5_floor.html)); break;
        case "6": echo(file_get_contents(6_floor.html)); break;
        case "7": echo(file_get_contents(7_floor.html)); break;
        default: echo(file_get_contents(stroll.html));
    }
?>