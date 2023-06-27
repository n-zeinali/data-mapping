<?php
namespace Mapping\Apis\Users;


use Mapping\Interfaces\DataMapperInterface;

/**
 * Class DataMapper.
 *
 * @Annotation
 * @Annotation\Target({"PROPERTY"})
 */
class UserDataMapper implements DataMapperInterface
{
    public $json_field;
}
