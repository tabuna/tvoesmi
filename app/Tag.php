<?php

namespace App;

class Tag
{
    private string $name;
    private int $weight;

    /**
     * @param string $name
     * @param int    $weight
     */
    public function __construct(string $name, int $weight = 0)
    {
        $this->name = $name;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function __toString():string
    {
        return (string) $this->name;
    }
}
