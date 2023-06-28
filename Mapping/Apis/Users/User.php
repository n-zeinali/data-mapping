<?php

namespace Mapping\Apis\Users;



use Mapping\Interfaces\EntityInterface;

class User implements EntityInterface
{

    /**
     * @var
     * @UserDataMapper(json_field="user_name")
     */
    protected string $username;
    /**
     * @var
     * @UserDataMapper(json_field="full_name")
     */
    protected string $fullname;




    /**
     * @var
     * @UserDataMapper(json_field="bio")
     */

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return User
     */
    public function setUsername(mixed $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullname(): string
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     *
     * @return User
     */
    public function setFullname(mixed $fullname): static
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Gives a JSON representation of this user
     * @return string
     */
    public function toJson() {
        return json_encode([
            'fullname' => $this->fullname,
            'username' => $this->username
        ]);
    }


}
