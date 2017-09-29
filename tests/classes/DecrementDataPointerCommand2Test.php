<?php

class DecrementDataPointerCommand2Test extends PHPUnit_Framework_TestCase
{

    protected $registryMock;
    protected $command;

    protected function setUp()
    {
        $this->registryMock = $this->getMock("Registry");
    }

    public function testCanCreateInstance()
    {
        $this->command = new \DecrementDataPointerCommand($this->registryMock);
        $this->assertInstanceOf('DecrementDataPointerCommand', $this->command);
    }

    public function testRunCommandReturns1()
    {
        $this->command = new \DecrementDataPointerCommand($this->registryMock);
        $this->assertSame(1, $this->command->run());
    }

    public function testRunDecrementsDataPointer()
    {
        $this->registryMock->expects($this->once())
            ->method("decrementPointer");
        $this->command = new \DecrementDataPointerCommand($this->registryMock);
        $this->command->run();
    }
}
