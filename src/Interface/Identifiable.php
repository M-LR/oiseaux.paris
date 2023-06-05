<?php // Identifiable.php
declare(strict_types=1);

namespace App\Interface;

interface Identifiable
{
    public function getHexId(): string;
}
 