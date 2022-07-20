<?php

    namespace App\DTO;

    class SomeDto implements SomeDtoInterface
    {
        private ?string $name;
        private ?string $description;
        private ?int $price;

        /**
         * @return string|null
         */
        public function getName(): ?string
        {
            return $this->name;
        }

        /**
         * @param string|null $name
         */
        public function setName(?string $name): void
        {
            $this->name = $name;
        }

        /**
         * @return string|null
         */
        public function getDescription(): ?string
        {
            return $this->description;
        }

        /**
         * @param string|null $description
         */
        public function setDescription(?string $description): void
        {
            $this->description = $description;
        }

        /**
         * @return int|null
         */
        public function getPrice(): ?int
        {
            return $this->price;
        }

        /**
         * @param int|null $price
         */
        public function setPrice(?int $price): void
        {
            $this->price = $price;
        }


        public function jsonSerialize()
        {
            return get_object_vars($this);
        }
    }
