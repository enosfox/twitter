<?php

declare(strict_types=1);

namespace KitsuneCode\Twitter;

/**
 * Class KitsuneCode Consumer
 *
 * @author Enos S. S. Silva <https://github.com/enosfox>
 * @package KitsuneCode\Consumer
 */

class Consumer
{
    /** @var string  */
    public $key;
    /** @var string  */
    public $secret;
    /** @var string|null  */
    public $callbackUrl;

    /**
     * @param string|null $key
     * @param string|null $secret
     * @param null $callbackUrl
     */
    public function __construct(
        ?string $key,
        ?string $secret,
        ?string $callbackUrl = null,
    ) {
        $this->key = $key;
        $this->secret = $secret;
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Consumer[key=$this->key,secret=$this->secret]";
    }
}
