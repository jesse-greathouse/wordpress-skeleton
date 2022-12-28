# WordPress Skeleton Application

This repository is a starting point for building your WordPress application.

## Directories

All the following directories are required and must not be removed:

* `client-mu-plugins/`: For always active global plugins (similar to `mu-plugins`).
* `docs/`: Useful for storing documentation about an applications features and requirements.
* `images/`: Store your site's favicons here. All other public-facing images should be uploaded or imported.
* `languages/`: For `.po` and `.mo` translation files, which specify the translated strings for the site.
* `plugins/`: Your site's regular plugins.
* `private/`: Provides access to files that are not directly web accessible, but can be accessed by your theme or plugin code.
* `themes/`: Themes available to your sites.
* `custom-config/`: For custom configurations. This folder’s `custom-config.php` can be used to supply things usually found in `wp-config.php`.

The `docs/` directory is a special directory that contains your documentation for your application. It is not mounted onto your site, but is available for you to use.

## PHPCS for checking coding standards

This repo contains a starting point for installing and using a _local_ version of [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) (PHPCS). To get started, you'll need to have [Composer](https://getcomposer.org/) installed, then open a command line at this directory, and run:

```sh
composer install
```

This will install PHPCS and register the below standards:

 - [WordPress Coding Standards](https://github.com/WordPress/WordPress-Coding-Standards)
 - [PHPCompatibilityWP Standard](https://github.com/PHPCompatibility/PHPCompatibilityWP)

The `.phpcs.xml.dist` file contains a _suggested_ configuration, but you are free to amend this. You can also extend it for more granularity of configuration for theme and custom plugins.

To run PHPCS, navigate to the directory where the relevant `.phpcs.xml.dist` lives, and type:

```sh
vendor/bin/phpcs
```

See the [PHPCS documentation](https://github.com/squizlabs/PHP_CodeSniffer/wiki/Usage) (or run `phpcs -h`) for the available command line arguments.

## Support

This repository offers no official support of any kind. Use at your own risk.

## Your documentation here

Feel free to add to or replace this README.md content with content unique to your project, for example:

* Project-specific notes.
* Workflow documentation; so everyone working in this repo can follow a defined process, or
* Instructions for testing new features.

This can be detailed in the `docs/` directory.
