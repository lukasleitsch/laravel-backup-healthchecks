# Monitor Laravel Backups with Healthchecks

This package monitor [Laravel Backups](https://github.com/spatie/laravel-backup) with [Healthchecks](https://healthchecks.io/).

## Installation

You can install the package via composer:

```bash
composer require leitsch/laravel-backup-healthchecks
```

Add the Healtchecks Ping Url to your `.env` file.

```
BACKUP_HEALTHCHECKS_URL=
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lukas Leitsch](https://github.com/lukasleitsch)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
