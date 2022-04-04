<?php

namespace App;

class Main
{
    private string $name;

    public function __construct()
    {
        echo "Hello\n";
    }

    /**
     * Just a test
     *
     * @param string $name
     * @return void
     */
    public function teste(string $name): void
    {
        echo $name;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
