<?php
declare(strict_types=1);

namespace GreenLinks\Eav;

interface Driver
{
    public function lookup(string $eql): array;

    /**
     * @return static
     */
    public function store(Entity ...$entities);
}
