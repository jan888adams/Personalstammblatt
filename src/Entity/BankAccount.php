<?php declare(strict_types=1);

namespace Personalstammblatt\Entity;

final class BankAccount
{
    public function __construct(
        public readonly string $bankName,
        public readonly string $iban,
        public readonly string $bic
    )
    {
    }
}