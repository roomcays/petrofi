<?php

namespace PetRofi;

class Snippets implements \Iterator
{
    /**
     * @var Snippet[]
     */
    private array $store;

    public function __construct(Snippet ...$store)
    {
        $this->store = $store;
    }

    public function current(): Snippet
    {
        return current($this->store);
    }

    public function next(): void
    {
        next($this->store);
    }

    public function key(): int
    {
        return key($this->store);
    }

    public function valid(): bool
    {
        return key($this->store) !== null;
    }

    public function rewind(): void
    {
        reset($this->store);
    }
}