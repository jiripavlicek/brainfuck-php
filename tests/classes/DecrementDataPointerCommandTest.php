<?php

class DecrementDataPointerCommandTest extends PHPUnit_Framework_TestCase
{

    protected $registry;
    protected $command;

    protected function setUp()
    {
        $this->registry = new \Registry();
        $this->command = new \DecrementDataPointerCommand($this->registry);
    }

    public function testCanCreateInstance()
    {
        $this->assertInstanceOf('DecrementDataPointerCommand', $this->command);
    }

    public function testRunCommandReturns1()
    {
        $this->assertSame(1, $this->command->run());
    }

    public function testRunDecrementsDataPointer()
    {
        $this->command->run();
        $this->assertSame(-1, $this->registry->getPointer());
    }
}