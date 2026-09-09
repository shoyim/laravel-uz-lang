<?php

namespace LaravelUzLang\Tests;

class ServiceProviderTest extends TestCase
{
    public function test_service_provider_is_registered(): void
    {
        $this->assertTrue(
            $this->app->providerIsLoaded(\LaravelUzLang\ServiceProvider::class)
        );
    }

    public function test_lang_files_are_published(): void
    {
        $paths = array_keys(\Illuminate\Support\ServiceProvider::pathsToPublish(
            \LaravelUzLang\ServiceProvider::class,
            'lang'
        ));

        $this->assertNotEmpty($paths);
        $this->assertStringEndsWith('lang', $paths[0]);
    }

    public function test_lang_files_return_valid_arrays(): void
    {
        foreach (['auth', 'pagination', 'passwords', 'validation'] as $file) {
            $translations = require __DIR__."/../lang/uz/{$file}.php";

            $this->assertIsArray($translations, "'{$file}.php' should return an array.");
            $this->assertNotEmpty($translations, "'{$file}.php' should not be empty.");
        }
    }

    public function test_validation_file_has_no_untranslated_default_strings(): void
    {
        $translations = require __DIR__.'/../lang/uz/validation.php';

        foreach ($translations as $key => $value) {
            if (! is_string($value)) {
                continue;
            }

            $this->assertStringNotContainsString(
                'must be',
                $value,
                "The '{$key}' validation line still contains an untranslated English message."
            );
        }
    }
}
