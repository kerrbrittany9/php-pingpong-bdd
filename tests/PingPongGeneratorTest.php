<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray_counter()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2], $result);
        }

        function test_generatePingPongArray_byThree()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2, "ping"], $result);
        }

        function test_generatePingPongArray_byFive()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2, "ping", 4, "pong"], $result);
        }

        function test_generatePingPongArray_byBoth()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2, "ping", 4, "pong", "ping", 7, 8, "ping", "pong", 11, "ping", 13, 14, "pingpong"], $result);
        }
    }
?>
