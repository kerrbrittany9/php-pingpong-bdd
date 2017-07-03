<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $array = [];
            for ($index = 1; $index <= $input; $index ++) {
                array_push($array, $index);
                if (($index % 15) == 0) {
                    array_pop($array);
                    array_push($array, "pingpong");
                } elseif (($index % 5) == 0) {
                    array_pop($array);
                    array_push($array, "pong");
                } elseif (($index % 3) == 0) {
                    array_pop($array);
                    array_push($array, "ping");
                }
            }
            return $array;
        }
    }

?>
