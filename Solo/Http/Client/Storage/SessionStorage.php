<?php

namespace Solo\Http\Client\Storage;

use Solo\Session;

class SessionStorage implements TokenStorageInterface
{
    public function __construct(private readonly Session $session)
    {
    }

    public function set(string $key, string $token): bool
    {
        $this->session->set($key, $token);
        return true;
    }

    public function get(string $key): ?string
    {
        return $this->session->get($key);
    }

    public function delete(string $key): bool
    {
        $this->session->unset($key);
        return true;
    }
}