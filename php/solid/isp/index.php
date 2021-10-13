<?php

spl_autoload_register(function ($className) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

class UserRepository implements Jsonable, Serializeable
{
    private $users;

    public function __construct($users)
    {
        $this->users = $users;
    }

    public function toJson(): string
    {
        return json_encode($this->users);
    }

    public function toSerialize()
    {
        return serialize($this->users);
    }
}

$userRepository = new UserRepository(['bau', 'duc']);
echo $userRepository->toSerialize();