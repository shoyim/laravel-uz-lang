# Laravel Uzbek Language Pack

[![Tests](https://github.com/shoyim/laravel-uz-lang/actions/workflows/tests.yml/badge.svg)](https://github.com/shoyim/laravel-uz-lang/actions/workflows/tests.yml)
[![Total Downloads](https://poser.pugx.org/shoyim/laravel-lang/d/total.svg)](https://packagist.org/packages/shoyim/laravel-lang)
[![Latest Stable Version](https://poser.pugx.org/shoyim/laravel-lang/v/stable.svg)](https://packagist.org/packages/shoyim/laravel-lang)
[![License](https://poser.pugx.org/shoyim/laravel-lang/license.svg)](https://packagist.org/packages/shoyim/laravel-lang)

Laravel uchun rasmiy o'zbekcha (`uz`) til paketi — autentifikatsiya, sahifalash, parolni tiklash va validatsiya xabarlarining to'liq tarjimasi.

A complete Uzbek (`uz`) translation pack for Laravel's default `auth`, `pagination`, `passwords` and `validation` language lines.

## Talablar / Requirements

| Package        | Version              |
|----------------|-----------------------|
| PHP            | `^7.3` yoki `^8.0` (8.5 gacha) |
| Laravel        | `7.x` – `13.x`        |

## O'rnatish / Installation

Composer orqali o'rnating:

```bash
composer require shoyim/laravel-lang
```

Paket Laravel'ning **package auto-discovery** funksiyasidan foydalanadi — hech qanday qo'shimcha sozlash shart emas. Agar auto-discovery o'chirilgan bo'lsa, service provider'ni qo'lda `config/app.php` ga qo'shing:

```php
'providers' => [
    // ...
    LaravelUzLang\ServiceProvider::class,
],
```

Til fayllarini o'z loyihangizga nusxalash uchun quyidagi buyruqni ishga tushiring:

```bash
php artisan vendor:publish --tag=lang
```

Bu `lang/uz` (Laravel 9+) yoki `resources/lang/uz` (Laravel 7–8) papkasiga fayllarni nusxalaydi.

## Foydalanish / Usage

Ilovangiz uchun standart tilni o'zbekchaga o'zgartiring — `config/app.php`:

```php
'locale' => 'uz',
```

Shundan so'ng Laravel'ning barcha standart xabarlari (validatsiya, autentifikatsiya, sahifalash, parolni tiklash) avtomatik ravishda o'zbek tilida chiqadi.

Kerak bo'lsa, tilni ish vaqtida ham o'zgartirish mumkin:

```php
app()->setLocale('uz');
```

## Nimalar tarjima qilingan? / What's included

* `auth.php` — kirish xatoliklari
* `pagination.php` — sahifalash tugmalari
* `passwords.php` — parolni tiklash xabarlari
* `validation.php` — validatsiya qoidalari (Laravel 7–13 dagi barcha qoidalar, jumladan `enum`, `prohibited`, `current_password`, `ulid`, `list`, `base64`, `array_keys` kabi eng yangi qoidalar) va attributlar nomlari

## Testlar / Testing

```bash
composer install
vendor/bin/phpunit
```

## Hissa qo'shish / Contributing

Xatolik, noto'g'ri tarjima yoki yangi qoida qo'shishni istasangiz, [CONTRIBUTING.md](CONTRIBUTING.md) ga qarang va pull request oching.

## Litsenziya / License

[MIT license](LICENSE.md).
