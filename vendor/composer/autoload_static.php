<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0136a3610f886d22ebb291d2ef60d80
{
    public static $files = array (
        'ddc0a4d7e61c0286f0f8593b1903e894' => __DIR__ . '/..' . '/clue/stream-filter/src/functions.php',
        '8cff32064859f4559445b89279f3199c' => __DIR__ . '/..' . '/php-http/message/src/filters.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Webmozart\\Assert\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'H' => 
        array (
            'Http\\Promise\\' => 13,
            'Http\\Message\\MultipartStream\\' => 29,
            'Http\\Message\\' => 13,
            'Http\\Discovery\\' => 15,
            'Http\\Client\\Common\\' => 19,
            'Http\\Client\\' => 12,
        ),
        'C' => 
        array (
            'Clue\\StreamFilter\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Webmozart\\Assert\\' => 
        array (
            0 => __DIR__ . '/..' . '/webmozart/assert/src',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Http\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/promise/src',
        ),
        'Http\\Message\\MultipartStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/multipart-stream-builder/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message-factory/src',
            1 => __DIR__ . '/..' . '/php-http/message/src',
        ),
        'Http\\Discovery\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/discovery/src',
        ),
        'Http\\Client\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/client-common/src',
        ),
        'Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/httplug/src',
        ),
        'Clue\\StreamFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/stream-filter/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mailgun' => 
            array (
                0 => __DIR__ . '/..' . '/mailgun/mailgun-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0136a3610f886d22ebb291d2ef60d80::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0136a3610f886d22ebb291d2ef60d80::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc0136a3610f886d22ebb291d2ef60d80::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
