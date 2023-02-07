<?php

namespace GussWare\GwBoilerplate\Includes\Helpers;

class GwInputHelper
{
    public static function toDto($dto, $data)
    {
        foreach ($dto as $key => $item) {
            if (isset($data[$key])) {
                $dto->$key = $data[$key];
            }
        }

        return $dto;
    }
}
