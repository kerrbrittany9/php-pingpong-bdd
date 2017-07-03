<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray_counter()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            $result = $test_PingPongGenerator->generatePingPongArray($input);

            $this->assertEquals([1, 2, 3], $result);
        }
    }
?>
