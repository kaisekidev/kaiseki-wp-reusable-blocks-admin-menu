# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 1.0.0 - 2026-06-02

First tagged release.

### Added

- `ReusableBlocksAdminMenu` hook provider (and `ReusableBlocksAdminMenuFactory` / `ConfigProvider`)
  that adds a top-level WordPress admin menu entry linking to the `wp_block` post-type list
  (`edit.php?post_type=wp_block`). Page/menu title, capability, dashicon, and position are
  configurable under the `reusable_blocks_admin_menu` config key.

### Changed

- PHP requirement is `^8.2` (PHP 8.4 is the primary target).
- Modernized the dev toolchain (PHPStan 2, PHPUnit 11 schema, composer-require-checker 4); now depends
  on `kaiseki/php-coding-standard: ^1.0` with the shared PHPStan config; `kaiseki/config` and
  `kaiseki/wp-hook` pinned to `^2.0`. CI now runs via the reusable workflow in `kaisekidev/.github`.
