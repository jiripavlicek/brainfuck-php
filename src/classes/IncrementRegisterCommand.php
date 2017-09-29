<?php

class IncrementRegisterCommand extends AbstractCommand {

    public function run()
    {
        $this->registry->increment();
        return 1;
    }
}