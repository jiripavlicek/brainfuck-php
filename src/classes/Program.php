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

    public function run()
    {
        $this->programCounter = 0;
        while (isset($this->program[$this->programCounter])) {
            $command = $this->program[$this->programCounter];

            // echo "processing command: $command {$this->programCounter}\n";
            
            $commandClass = $this->decodeCommandClass($command);
            $commandObject = new $commandClass($this->registry, $this->program, $this->programCounter);
            $this->programCounter += $commandObject->run();
        }
    }

    public function decodeCommandClass($command)
    {
        $knowCommands = $this->getKnowsCommands();
        if (isset($knowCommands[$command])) {
            return $knowCommands[$command];
        }
        return 'UnknownCommand';
    }

    public function getKnowsCommands()
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