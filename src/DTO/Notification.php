<?php

namespace App\DTO;

class Notification
{
    /**
     * @var array
     */
    private $domains;

    /**
     * @var array
     */
    private $usersIds;

    /**
     * @var string
     */
    private $message;

    /**
     * @return array
     */
    public function getDomains(): array
    {
        return $this->domains;
    }

    /**
     * @param array $domains
     * @return Notification
     */
    public function setDomains(array $domains): Notification
    {
        $this->domains = $domains;
        return $this;
    }

    /**
     * @return array
     */
    public function getUsersIds(): array
    {
        return $this->usersIds;
    }

    /**
     * @param array $usersIds
     * @return Notification
     */
    public function setUsersIds(array $usersIds): Notification
    {
        $this->usersIds = $usersIds;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Notification
     */
    public function setMessage(string $message): Notification
    {
        $this->message = $message;
        return $this;
    }



}