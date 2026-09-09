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

    /**
     * @dataProvider langFileProvider
     */
    public function test_lang_files_return_valid_arrays(string $file): void
    {
        $translations = require __DIR__."/../lang/uz/{$file}.php";

        $this->assertIsArray($translations);
        $this->assertNotEmpty($translations);
    }

    public static function langFileProvider(): array
    {
        return [
            'auth' => ['auth'],
            'pagination' => ['pagination'],
            'passwords' => ['passwords'],
            'validation' => ['validation'],
        ];
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
