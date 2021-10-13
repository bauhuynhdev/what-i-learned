<?php

class Admin implements Userable, Adminable
{
    public function createPost(): void
    {
        echo 'Create post' . PHP_EOL;
    }

    public function updatePost($id): void
    {
        echo 'Update post' . PHP_EOL;
    }

    public function deletePost($id): void
    {
        echo 'Delete post' . PHP_EOL;
    }

    public function login(): void
    {
        echo 'Admin login' . PHP_EOL;
    }

    public function read(): void
    {
        echo 'Admin read post';
    }
}