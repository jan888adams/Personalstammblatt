<?php declare(strict_types=1);

namespace Personalstammblatt\Entity;

final class Confession
{
    public function __construct(public readonly string $ownKonfession, public readonly ?string $spouseKonfession = null)
    {
    }
}