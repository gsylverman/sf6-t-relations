<?php

    namespace App\Service;

    use App\DTO\SomeDtoInterface;

    interface SomeModifierInterface
    {
        public function apply(SomeDtoInterface $data): SomeDtoInterface;
    }
