<?php
declare(strict_types = 1);

namespace SilexFriends\Uuid;

use Ramsey\Uuid\Uuid as UuidGenerator;
use Pimple\Application;
use Pimple\ServiceProviderInterface;

/**
 * Universally Unique Identifier Service Provider
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Uuid implements UuidInterface, ServiceProviderInterface
{
    /**
     * (non-PHPdoc)
     * @see \Silex\ServiceProviderInterface::register()
     * @param Application $app
     */
    public function register(Container $app)
    {
        $service = $this;

        $app[static::GENERATE] = $app->protect(
            function () use ($service) {
                return $service->generate();
            }
        );
    }

    /**
     * (non-PHPdoc)
     * @see \Silex\ServiceProviderInterface::boot()
     * @param Application $app
     */
    public function boot(Application $app)
    {
        // :)
    }

    /**
     * @inheritdoc
     */
    public function generate(): string
    {
        return UuidGenerator::uuid4()->toString();
    }
}
