<?php

interface NumberInterface
{
    public function load(): array;

    public function keep(array $randArr): void;
}