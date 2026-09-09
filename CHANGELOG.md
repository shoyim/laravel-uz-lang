# Changelog

All notable changes to `laravel-uz-lang` will be documented in this file.

## [Unreleased]

### Added
- Auto-discovery support so the service provider registers itself without manual configuration.
- `illuminate/support` dependency with broad version constraints (`^7.0` – `^13.0`) so the package works across Laravel 7 through 13.
- Missing validation rule translations introduced in newer Laravel releases (`enum`, `prohibited*`, `current_password`, `ulid`, `decimal`, `missing*`, `present_if`, `any_of`, `array_keys`, `base64`, `contains`, `doesnt_contain`, `encoding`, `in_array_keys`, `list`, `prohibited_if_accepted`, `prohibited_if_declined`, `required_if_declined`, etc.) — verified against the actual Laravel 13.x `validation.php` source, not just documentation.
- Test suite (Orchestra Testbench + PHPUnit) and a GitHub Actions CI matrix that actually installs and runs against every supported Laravel major version (7–13) on both its minimum and newest compatible PHP version (7.3 through 8.5).
- `.gitattributes` to keep dev-only files out of dist archives.

### Changed
- Namespace changed from `LaravelLang` to `LaravelUzLang` for clarity and to avoid collisions with other packages.
- Composer package `type` changed from `project` to `library`.
- `composer.json` was missing a PSR-4 `autoload` section entirely, meaning the `ServiceProvider` class could never actually be autoloaded — fixed.

### Fixed
- Translated the remaining English string in `validation.php` (`multiple_of`).
- Disabled Composer 2.9+'s `policy.advisories.block` (root-package-only setting) so CI can install older Laravel versions that carry unresolved security advisories in Packagist's data, without affecting consumers of the package.

### Note
- The Composer package name briefly changed to `shoyim/laravel-uz-lang` to match the repository, then was reverted back to `shoyim/laravel-lang` because that is the name already registered on Packagist — changing it broke Packagist's auto-update ("package is in a broken state").
