<?php

class ReportRepository
{
    private $repository;

    public function __construct(IRepository $repository)
    {
        $this->repository = $repository;
    }

    public function count()
    {
        return count($this->repository->all());
    }
}