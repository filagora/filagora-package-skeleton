# ForumKit Example

Template for ForumKit packages: a Laravel 13 / Filament 5 plugin with Pest tests,
Larastan, Pint and shared CI. Create a new package by copying this repository,
then rename the namespace, package name, config file and plugin id.

## Install

```bash
composer require zencart/forumkit-example
php artisan vendor:publish --tag=forumkit-example-config
```

Register the plugin on a Filament panel:

```php
->plugin(\ForumKit\Example\PackagePlugin::make())
```

## Configuration

`config/forumkit-example.php` is merged with the host's copy, so list only what
differs. Environment variables are prefixed `FORUMKIT_`.

## Extending

Extend through documented contracts, events and registries. Anything not documented
is `@internal`.

## Testing

```bash
composer test
```

The default run uses in-memory SQLite. Run against MariaDB with
`DB_CONNECTION=mariadb` (host and credentials from your environment). Tests always
use a database named `testing`, never your development database.

## Local development (DDEV)

`.ddev/` is included. `ddev start` creates both `db` and `testing`; give each copy of
this template its own `name` in `.ddev/config.yaml`.

## Licence

MIT. See [LICENSE](LICENSE).
