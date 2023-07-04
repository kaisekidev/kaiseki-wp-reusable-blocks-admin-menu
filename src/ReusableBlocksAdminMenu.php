<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ReusableBlocksAdminMenu;

use Kaiseki\WordPress\Hook\HookCallbackProviderInterface;

final class ReusableBlocksAdminMenu implements HookCallbackProviderInterface
{
    public function registerHookCallbacks(): void
    {
        add_action('admin_menu', [$this, 'addReusableBlocksAdminMenu']);
    }

    public function addReusableBlocksAdminMenu(): void
    {
        add_menu_page(
            esc_html__('Reusable Blocks', 'reusable-blocks-admin-menu-option'),
            esc_html__('Reusable Blocks', 'reusable-blocks-admin-menu-option'),
            'delete_published_posts',
            'edit.php?post_type=wp_block',
            fn() => null,
            'dashicons-layout',
            21
        );
    }
}
