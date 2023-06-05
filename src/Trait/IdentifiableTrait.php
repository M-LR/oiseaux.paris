<?php // IdentifiableTrait.php
declare(strict_types=1);

namespace App\Trait;
 
trait IdentiableTrait
{
    public function getHexId(): string
    {
        return bin2hex(random_bytes(5));
    }

    public function getId(): string
    {
        return 'ID returned from trait';
    }
}