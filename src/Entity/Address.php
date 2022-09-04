<?php declare(strict_types=1);

final class Address
{
    public function __construct(
        public readonly string $street,
        public readonly string $houseNumber,
        public readonly string $plz,
        public readonly string $city
    )
    {
    }
}