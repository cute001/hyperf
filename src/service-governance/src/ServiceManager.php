<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\ServiceGovernance;

class ServiceManager
{
    /**
     * @var array
     */
    private $services = [];

    /**
     * Register a service to the manager.
     */
    public function register(string $name, string $path, array $metadata): void
    {
        $this->services[$name][$path] = $metadata;
    }

    /**
     * Deregister a service from the manager.
     */
    public function deregister(string $name, ?string $path = null): void
    {
        if ($path) {
            unset($this->services[$name][$path]);
        } else {
            unset($this->services[$name]);
        }
    }

    /**
     * List all services.
     */
    public function all(): array
    {
        return $this->services;
    }
}
