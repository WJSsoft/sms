<?php
class Issue1348Test extends PHPUnit_Framework_TestCase
{
    public function testSTDOUT()
    {
        fwrite(STDOUT, "\nSTDOUT does not break demo result\n");
        $this->assertTrue(true);
    }

    public function testSTDERR()
    {
        fwrite(STDERR, 'STDERR works as usual.');
    }
}