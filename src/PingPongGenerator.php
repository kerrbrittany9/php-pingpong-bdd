<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $array = [];
            for ($index = 1; $index <= $input; $index ++) {
                array_push($array, $index);
            }
            return $array;
        }
    }



?>
