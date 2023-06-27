<?php
namespace Mapping\Classes;


use Mapping\Interfaces\DataInterface;

class JsonData implements DataInterface
{

    public static function getData($response) : array
    {
        return json_decode($response, true);
    }
}
