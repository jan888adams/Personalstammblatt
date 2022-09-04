<?php declare(strict_types=1);

final class BankAccount
{
    public function __construct(
        public readonly string $bankName,
        public readonly string $iban,
        public readonly string $bic)
    {
    }
}