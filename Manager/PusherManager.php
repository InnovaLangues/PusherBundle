<?php

namespace Innova\PusherBundle\Manager;

use Innova\Pusher;

class PusherManager
{
    protected $url;
    protected $app;
    protected $key;
    protected $secret;

    public function __construct($url, $app, $key, $secret)
    {
        $this->url = $url;
        $this->app = $app;
        $this->key = $key;
        $this->secret = $secret;
    }

    public function init()
    {
        $pusher = new Pusher($this->url, $this->app, $this->key, $this->secret);

        return $pusher;
    }
}
