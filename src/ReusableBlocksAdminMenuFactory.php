<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ReusableBlocksAdminMenu;

use Kaiseki\Config\Config;
use Psr\Container\ContainerInterface;

class ReusableBlocksAdminMenuFactory
{
    public function __invoke(ContainerInterface $container): ReusableBlocksAdminMenu
    {
        $config = Config::get($container);
        return new ReusableBlocksAdminMenu(
            $config->string(
                'reusable_blocks_admin_menu/page_title',
                esc_html__('Reusable Blocks', 'reusable-blocks-admin-menu-option')
            ),
            $config->string(
                'reusable_blocks_admin_menu/menu_title',
                esc_html__('Reusable Blocks', 'reusable-blocks-admin-menu-option')
            ),
            $config->string('reusable_blocks_admin_menu/capability', 'delete_published_posts'),
            $config->string('reusable_blocks_admin_menu/icon_url', 'dashicons-layout'),
            $config->int('reusable_blocks_admin_menu/position', 21),
        );
    }
}
