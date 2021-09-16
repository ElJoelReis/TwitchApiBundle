<?php declare(strict_types = 1);

namespace SimplyStream\TwitchApiBundle\Helix\EventSub\Entity\Events;

trait HasBroadcasterUser
{
    /**
     * @var string
     */
    protected $broadcasterUserId;

    /**
     * @var string
     */
    protected $broadcasterUserLogin;

    /**
     * @var string
     */
    protected $broadcasterUserName;

    /**
     * @return string
     */
    public function getBroadcasterUserId(): string
    {
        return $this->broadcasterUserId;
    }

    /**
     * @param string $broadcasterUserId
     *
     * @return $this
     */
    public function setBroadcasterUserId(string $broadcasterUserId): self
    {
        $this->broadcasterUserId = $broadcasterUserId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterUserLogin(): string
    {
        return $this->broadcasterUserLogin;
    }

    /**
     * @param string $broadcasterUserLogin
     *
     * @return $this
     */
    public function setBroadcasterUserLogin(string $broadcasterUserLogin): self
    {
        $this->broadcasterUserLogin = $broadcasterUserLogin;

        return $this;
    }

    /**
     * @return string
     */
    public function getBroadcasterUserName(): string
    {
        return $this->broadcasterUserName;
    }

    /**
     * @param string $broadcasterUserName
     *
     * @return $this
     */
    public function setBroadcasterUserName(string $broadcasterUserName): self
    {
        $this->broadcasterUserName = $broadcasterUserName;

        return $this;
    }
}
