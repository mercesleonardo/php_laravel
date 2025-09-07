<?php

namespace Core\Library;

use DI\{Container, ContainerBuilder};
use Dotenv\Dotenv;
use Spatie\Ignition\Ignition;

class App
{
    public readonly Container $container;

    public static function create(): self
    {
        return new self();
    }

    public function withErrorPage(): static
    {
        Ignition::make()
            ->setTheme('dark')
            ->shouldDisplayException($_ENV['ENV'] === 'development')
            ->register();

        return $this;
    }

    public function withContainer(): static
    {
        $builder         = new ContainerBuilder();
        $this->container = $builder->build();

        return $this;
    }

    public function withEnvironmentVariables(): static
    {
        try {

            $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
            $dotenv->load();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

        return $this;
    }
}
