<?php

declare(strict_types=1);

namespace Kaiseki\WordPress\ReusableBlocksAdminMenu;

use Kaiseki\WordPress\Hook\HookProviderInterface;

use function __;
use function add_action;
use function add_menu_page;

final class ReusableBlocksAdminMenu implements HookProviderInterface
{
    public function __construct(
        private readonly string $pageTitle = '',
        private readonly string $menuTitle = '',
        private readonly string $capability = 'edit_posts',
        private readonly string $iconUrl = 'dashicons-layout',
        private readonly int $position = 0,
    ) {
    }

    public function addHooks(): void
    {
        add_action('admin_menu', [$this, 'addReusableBlocksAdminMenu']);
    }

    public function addReusableBlocksAdminMenu(): void
    {
        add_menu_page(
            $this->pageTitle === '' ? __('Reusable Blocks') : $this->pageTitle,
            $this->menuTitle === '' ? __('Reusable Blocks') : $this->menuTitle,
            $this->capability,
            'edit.php?post_type=wp_block',
            icon_url: $this->iconUrl,
            position: $this->position > 0 ? $this->position : null
        );
    }
}
