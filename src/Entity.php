<?php
declare(strict_types=1);

namespace GreenLinks\Eav;

class Entity
{
    private array $values;

    public function __construct(array $values = [])
    {
        $this->values = $values;
    }

    public function set(string $attribute, string $value): self
    {
        $this->values[$attribute] = $value;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get(string $attribute, $default = null)
    {
        return $this->values[$attribute] ?? $default;
    }

    public function toArray(): array
    {
        return $this->values;
    }
}
