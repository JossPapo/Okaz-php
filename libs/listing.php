<?php

function getListings(): array
{
    return [
        ["title" => "Test1", "price" => 30, "image" => "morty.png", "description" => "Test ceci est un Test"],
        ["title" => "Test2", "price" => 10, "image" => "morty.png", "description" => "Test ceci est un Test"],
        ["title" => "Test3", "price" => 20, "image" => "morty.png", "description" => "Test ceci est un Test"],
    ];
}

function getListingById(int $id): array
{
    $listings = getListings();
    return $listings[$id];
}
