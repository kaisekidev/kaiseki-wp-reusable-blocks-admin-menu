<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ReusableBlocksAdminMenu;

use function __;

final class ConfigProvider
{
    /**
     * @return array<mixed>
     */
    public function __invoke(): array
    {
        return [
            'reusable_blocks_admin_menu' => [
                'page_title' => __('Reusable Blocks'),
                'menu_title' => __('Reusable Blocks'),
                'capability' => 'delete_published_posts',
                'icon' => 'dashicons-layout',
                'position' => 0,
            ],
            'hook' => [
                'provider' => [
                    ReusableBlocksAdminMenu::class,
                ],
            ],
            'dependencies' => [
                'factories' => [
                    ReusableBlocksAdminMenu::class => ReusableBlocksAdminMenuFactory::class,
                ],
            ],
        ];
    }
}
