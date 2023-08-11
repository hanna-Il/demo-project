<?php

declare(strict_types=1);

class Book
{
    #[Column]
    #[Id]
    #[GeneratedValue(strategy: 'IDENTITY')]
    private readonly int $id;

    #[Column]
    private readonly string $title;

    #[ManyToMany(targetEntity: Author::class)]
    #[JoinTable(name: 'book_author')]
    private readonly Collection $authors;

    public function __construct()
    {
        $this->authors = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /** @return list<Author> */
    public function getAuthors(): array
    {
        return $this->authors->getValues();
    }
}
