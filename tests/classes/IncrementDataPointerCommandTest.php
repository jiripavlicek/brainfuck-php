<?php

class IncrementDataPointerCommandTest extends PHPUnit_Framework_TestCase
{

    protected $registryMock;
    protected $command;

    protected function setUp()
    {
        $this->registryMock = $this->getMock("Registry");
    }

    public function testCanCreateInstance()
    {
        $this->command = new \IncrementDataPointerCommand($this->registryMock);
        $this->assertInstanceOf('IncrementDataPointerCommand', $this->command);
    }

    public function testRunCommandReturns1()
    {
        $this->command = new \IncrementDataPointerCommand($this->registryMock);
        $this->assertSame(1, $this->command->run());
    }

    public function testRunIncrementsDataPointer()
    {
        $this->registryMock->expects($this->once())
            ->method("incrementPointer");
        $this->command = new \IncrementDataPointerCommand($this->registryMock);
        $this->command->run();
    }
}
