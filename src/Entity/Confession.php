<?php declare(strict_types=1);

final class Confession
{
    public function __construct(public readonly string $ownKonfession, public readonly $spouseKonfession = null)
    {
    }
}