<?php

class NumberStorages implements NumberInterface
{
    private string $data;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function load(): array
    {
        return (array)explode(' ', file_get_contents($this->data));
    }

    public function keep(array $randArr): void
    {
        file_put_contents($this->data, implode(' ', $randArr));
    }
}