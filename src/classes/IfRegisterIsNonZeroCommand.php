<?php

class IfRegisterIsNonZeroCommand extends AbstractCommand {

    public function run()
    {
        if (!$this->registry->get()) {
            return 1;
        }
        $i = -1;
        $level = 1;
        while ($level != 0 && isset($this->program[$this->programCounter + $i])) {
            if ($this->program[$this->programCounter + $i] == '[') {
                $level--;
            }
            if ($this->program[$this->programCounter + $i] == ']') {
                $level++;
            }
            $i--;
        }
        if (!$level) {
            return $i + 2;
        }
        die('] command didn\' found proper starting [');
    }
}