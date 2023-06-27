<?php
namespace Mapping\Classes;

use Mapping\Interfaces\DataInterface;
use Mtownsend\XmlToArray\XmlToArray;

class XmlData implements DataInterface
{

    public static function getData($response) : array
    {
        return XmlToArray::convert($response);
    }
}
