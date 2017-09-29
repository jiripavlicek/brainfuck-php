<?php

class Program {

    private $programCounter;
    private $registry;
    private $program;

    public function __construct(string $program)
    {
        $this->registry = new Registry();
        $this->program = $program;
    }

    public function run() : string
    {
        $output = '';
        $this->programCounter = 0;
        while (isset($this->program[$this->programCounter])) {
            $command = $this->program[$this->programCounter];
            $commandClass = $this->decodeCommandClass($command);
            $commandObject = new $commandClass($this->registry, $this->program, $this->programCounter);
            $this->programCounter += $commandObject->run();
            $output .= $commandObject->getOutput();
        }
        return $output;
    }

    /**
     * @param string $command
     * @return string
     */
    public function decodeCommandClass($command) : string
    {
        $knowCommands = $this->getKnownCommands();
        if (isset($knowCommands[$command])) {
            return $knowCommands[$command];
        }
        return 'UnknownCommand';
    }

    /**
     * @return array
     */
    public function getKnownCommands() : array
    {
        return [
            '>' => 'IncrementDataPointerCommand',
            '<' => 'DecrementDataPointerCommand',
            '+' => 'IncrementRegisterCommand',
            '-' => 'DecrementRegisterCommand',
            '.' => 'OutputRegisterCommand',
            ',' => 'InputRegisterCommand',
            '[' => 'IfRegisterIsZeroCommand',
            ']' => 'IfRegisterIsNonZeroCommand',
        ];
    }
}