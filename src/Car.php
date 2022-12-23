<?php 

declare(strict_types = 1);

namespace Src;

/**
 * Src\Car
 */
class Car
{
   
    private string $color;
    private int $year;

    public function __construct()
    {
        print __CLASS__ . $this->run() . PHP_EOL;
    }

    public function run(): string
    {
        return 'Car is running...';
    }

    public function stop(): string
    {
        return 'Car has stopped...';
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function __destruct()
    {
        print __CLASS__ . $this->stop();
    }
}
