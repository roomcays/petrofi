<?php

namespace PetRofi;

readonly class Snippet
{
    /**
     * @var string[]
     */
    private array $tags;

    public function __construct(private string $description, private string $command, string ...$tags)
    {
        $this->tags = $tags;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }
}