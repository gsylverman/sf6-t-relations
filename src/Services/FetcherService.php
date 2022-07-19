<?php

    namespace App\Services;

    class FetcherService
    {
        public function get(string $url): string
        {
            return 'GET FORM API: ' . $url;
        }
    }

