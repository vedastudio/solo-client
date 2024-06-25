<?php declare(strict_types=1);

namespace Solo\Http\Client\Storage;

interface TokenStorageInterface
{
    public function set(string $key, string $token): bool;

    public function get(string $key): ?string;

    public function delete(string $key): bool;
}