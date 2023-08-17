<?php


namespace App\Services;


class Status
{
    static public function getStatus(): array
    {
        return [
            'En ligne' => '1',
            'Hors ligne' => '0',
        ];
    }
}