<?php declare(strict_types = 1);

namespace SimplyStream\TwitchApiBundle\Helix\EventSub\Entity\Events;

class UserUpdateEvent extends AbstractEvent
{
    use HasUser;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return UserUpdateEvent
     */
    public function setEmail(string $email): UserUpdateEvent
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return UserUpdateEvent
     */
    public function setDescription(string $description): UserUpdateEvent
    {
        $this->description = $description;

        return $this;
    }
}
