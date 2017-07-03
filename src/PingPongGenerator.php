<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $array = [];
            for ($index = 1; $index <= $input; $index ++) {
                array_push($array, $index);
                if (($index % 3) == 0) {
                    array_pop($array);
                    array_push($array, "ping");
                }
            }
            return $array;
        }
    }



?>
