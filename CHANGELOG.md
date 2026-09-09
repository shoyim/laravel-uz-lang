# Changelog

All notable changes to `laravel-uz-lang` will be documented in this file.

## [Unreleased]

### Added
- Auto-discovery support so the service provider registers itself without manual configuration.
- `illuminate/support` dependency with broad version constraints (`^7.0` – `^12.0`) so the package works across Laravel 7 through 12.
- Missing validation rule translations introduced in newer Laravel releases (`enum`, `prohibited*`, `current_password`, `ulid`, `decimal`, `missing*`, `present_if`, etc.).
- Test suite (Orchestra Testbench + PHPUnit) and GitHub Actions CI matrix across PHP/Laravel versions.
- `.gitattributes` to keep dev-only files out of dist archives.

### Changed
- Composer package name changed from `shoyim/laravel-lang` to `shoyim/laravel-uz-lang` to match the repository.
- Namespace changed from `LaravelLang` to `LaravelUzLang` for clarity and to avoid collisions with other packages.
- Composer package `type` changed from `project` to `library`.
- `composer.json` was missing a PSR-4 `autoload` section entirely, meaning the `ServiceProvider` class could never actually be autoloaded — fixed.

### Fixed
- Translated the remaining English string in `validation.php` (`multiple_of`).
