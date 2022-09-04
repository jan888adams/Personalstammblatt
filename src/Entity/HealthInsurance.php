<?php declare(strict_types=1);

final class HealthInsurance
{
    public function __construct(
        public readonly string $insurance,
        public readonly string $insuranceNumber,
        public readonly string $insuranceType
    )
    {
    }
}