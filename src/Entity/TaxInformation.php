<?php declare(strict_types=1);

final class TaxInformation
{
    public function __construct(
        public readonly string $taxNumber,
        public readonly string $taxOffice,
        public readonly string $taxClass,
        public readonly float $childAllowance
    )
    {
    }
}