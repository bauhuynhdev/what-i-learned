<?php

interface Adminable
{
    public function createPost(): void;

    public function updatePost($id): void;

    public function deletePost($id): void;
}