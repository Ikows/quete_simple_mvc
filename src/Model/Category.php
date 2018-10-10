<?php


namespace Model;

class Category
{
    private $id;
    private $name;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): Category
    {
        $this->id = $id;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name):Category
    {
        $this->name = $name;
        return $this;
    }
}