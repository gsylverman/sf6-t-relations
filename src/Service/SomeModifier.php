<?php

    namespace App\Service;

    use App\DTO\SomeDtoInterface;

    class SomeModifier implements SomeModifierInterface
    {

        public function apply(SomeDtoInterface $data): SomeDtoInterface
        {
            $newData = clone($data);
            $newData->setName("Some new Name");
            $newData->setPrice(100);

            return $newData;
        }
    }
