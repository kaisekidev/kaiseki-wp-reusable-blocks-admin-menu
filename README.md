# kaiseki/wp-reusable-blocks-admin-menu

Add a Reusable Blocks (`wp_block`) item to the WordPress admin menu via a `kaiseki/wp-hook` provider.

A single `kaiseki/wp-hook` `HookProviderInterface` (`ReusableBlocksAdminMenu`) that registers a
top-level admin menu entry linking to the `wp_block` post-type list (`edit.php?post_type=wp_block`),
so editors can reach the reusable/synced block library directly. Title, capability, dashicon, and
position are configurable.

## Installation

```bash
composer require kaiseki/wp-reusable-blocks-admin-menu
```

Requires PHP 8.2 or newer.

## Usage

Register `ConfigProvider` with your laminas-style config aggregator. It wires the
`ReusableBlocksAdminMenu` factory and activates the provider via `kaiseki/wp-hook`:

```php
use Kaiseki\WordPress\ReusableBlocksAdminMenu\ConfigProvider;

$config = (new ConfigProvider())();
```

Once active, the menu entry is added on the `admin_menu` action. Override any of the defaults under
the `reusable_blocks_admin_menu` config key:

```php
return [
    'reusable_blocks_admin_menu' => [
        'page_title' => 'Reusable Blocks', // defaults to __('Reusable Blocks')
        'menu_title' => 'Reusable Blocks', // defaults to __('Reusable Blocks')
        'capability' => 'delete_published_posts', // capability required to see the menu
        'icon'       => 'dashicons-layout', // dashicon (or icon URL)
        'position'   => 0,                  // menu position; 0 lets WordPress decide
    ],
];
```

## Development

```bash
composer install
composer check   # check-deps, cs-check, phpstan
```

## License

MIT — see [LICENSE](LICENSE).
