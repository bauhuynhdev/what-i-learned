<?php

class UserObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'The ' . $subject->getName() . ' has been updated' . PHP_EOL;
    }
}