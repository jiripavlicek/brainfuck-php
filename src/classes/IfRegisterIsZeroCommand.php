<?php

class IfRegisterIsZeroCommand extends AbstractCommand {

    public function run()
    {
        if ($this->registry->get()) {
            return 1;
        }
        $i = $this->programCounter + 1;
        $level = 1;
        while ($level != 0 && isset($this->program[$i])) {
            if ($this->program[$i] == '[') {
                $level++;
            }
            if ($this->program[$i] == ']') {
                $level--;
            }
            $i++;
        }
        if (!$level) {
            return $i;
        }
        die('[ command didn\' found proper ending ]');
    }
}