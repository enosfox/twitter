<?php

declare(strict_types=1);

namespace KitsuneCode\Twitter;

 /**
 * Class KitsuneCode Token
 *
 * @author Enos S. S. Silva <https://github.com/enosfox>
 * @package KitsuneCode\Token
 */

class Token
{
    /** @var string */
    public $key;
    /** @var string */
    public $secret;

    /**
     * @param string $key    The OAuth Token
     * @param string $secret The OAuth Token Secret
     */
    public function __construct(?string $key, ?string $secret)
    {
        $this->key = $key;
        $this->secret = $secret;
    }

    /**
     * Generates the basic string serialization of a token that a server
     * would respond to request_token and access_token calls with
     *
     * @return string
     */
    public function __toString(): string
    {
        return sprintf(
            'oauth_token=%s&oauth_token_secret=%s',
            Util::urlencodeRfc3986($this->key),
            Util::urlencodeRfc3986($this->secret),
        );
    }
}
