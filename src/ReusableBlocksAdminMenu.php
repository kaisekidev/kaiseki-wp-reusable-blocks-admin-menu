<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ReusableBlocksAdminMenu;

use Kaiseki\WordPress\Hook\HookCallbackProviderInterface;

final class ReusableBlocksAdminMenu implements HookCallbackProviderInterface
{
    public function __construct(
        private readonly string $pageTitle = '',
        private readonly string $menuTitle = '',
        private readonly string $capability = 'delete_published_posts',
        private readonly string $iconUrl = 'dashicons-layout',
        private readonly int $position = 21,
    ) {
    }

    public function registerHookCallbacks(): void
    {
        add_action('admin_menu', [$this, 'addReusableBlocksAdminMenu']);
    }

    public function addReusableBlocksAdminMenu(): void
    {
        add_menu_page(
            $this->pageTitle === ''
                ? esc_html__('Reusable Blocks', 'reusable-blocks-admin-menu-option')
                : $this->pageTitle,
            $this->menuTitle === ''
                ? esc_html__('Reusable Blocks', 'reusable-blocks-admin-menu-option')
                : $this->menuTitle,
            $this->capability,
            'edit.php?post_type=wp_block',
            fn() => null,
            $this->iconUrl,
            $this->position
        );
    }
}
