<?php

class RandomNumber
{
    private int $min;
    private int $max;
    private array $randArr;
    private NumberInterface $number;

    public function __construct(NumberInterface $number, $min, int $max)
    {
        $this->number = $number;
        $this->min = $min;
        $this->max = $max;
        $this->randArr = $number->load();
    }

    public function getNum(): int
    {
        $nr = rand($this->min, $this->max);
        $this->push($nr);
        return $nr;
    }

    public function push(int $nr): void
    {
        $this->randArr[] = $nr;
    }

    public function All(): array
    {
        return $this->randArr;
    }

    public function avg(): float
    {
        $first = array_sum($this->All()) / (count($this->All()) - 1);
        return number_format($first, 2);
    }

    public function save(): void
    {
        $this->number->keep($this->All());
    }

}
