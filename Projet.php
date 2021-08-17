<?php
class Projet
{
    public $name;
    public $patch;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->patch = './projets/'.$name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPatch($patch)
    {
        return $this->patch;
    }
}
?>