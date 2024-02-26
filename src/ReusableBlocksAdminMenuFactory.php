<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ReusableBlocksAdminMenu;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;

class ReusableBlocksAdminMenuFactory
{
    public function __invoke(ContainerInterface $container): ReusableBlocksAdminMenu
    {
        $config = Config::fromContainer($container);

        return new ReusableBlocksAdminMenu(
            $config->string('reusable_blocks_admin_menu.page_title'),
            $config->string('reusable_blocks_admin_menu.menu_title'),
            $config->string('reusable_blocks_admin_menu.capability'),
            $config->string('reusable_blocks_admin_menu.icon'),
            $config->int('reusable_blocks_admin_menu.position'),
        );
    }
}
