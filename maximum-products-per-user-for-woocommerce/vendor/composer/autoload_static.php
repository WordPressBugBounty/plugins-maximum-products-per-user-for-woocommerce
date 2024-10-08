<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a7c3ec4b46031d59a01972b3fe86ee0
{
    public static $files = array (
        '20872bbaff0e3115cc7db5ab4a7d607e' => __DIR__ . '/..' . '/wpfactory/wpfactory-promoting-notice/src/php/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'optimistex\\expression\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'optimistex\\expression\\' => 
        array (
            0 => __DIR__ . '/..' . '/optimistex/math-expression',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Expression' => __DIR__ . '/..' . '/optimistex/math-expression/Expression.lib.php',
        'ExpressionStack' => __DIR__ . '/..' . '/optimistex/math-expression/Expression.lib.php',
        'WPFactory\\Promoting_Notice\\Core' => __DIR__ . '/..' . '/wpfactory/wpfactory-promoting-notice/src/php/class-core.php',
        'WPFactory\\WPFactory_Admin_Menu\\Singleton' => __DIR__ . '/..' . '/wpfactory/wpfactory-admin-menu/src/php/trait-singleton.php',
        'WPFactory\\WPFactory_Admin_Menu\\WC_Settings_Menu_Item_Swapper' => __DIR__ . '/..' . '/wpfactory/wpfactory-admin-menu/src/php/class-wc-settings-menu-item-swapper.php',
        'WPFactory\\WPFactory_Admin_Menu\\WPFactory_Admin_Menu' => __DIR__ . '/..' . '/wpfactory/wpfactory-admin-menu/src/php/class-wpfactory-admin-menu.php',
        'WPFactory\\WPFactory_Cross_Selling\\Product_Categories' => __DIR__ . '/..' . '/wpfactory/wpfactory-cross-selling/src/php/class-product-categories.php',
        'WPFactory\\WPFactory_Cross_Selling\\Products' => __DIR__ . '/..' . '/wpfactory/wpfactory-cross-selling/src/php/class-products.php',
        'WPFactory\\WPFactory_Cross_Selling\\Singleton' => __DIR__ . '/..' . '/wpfactory/wpfactory-cross-selling/src/php/trait-singleton.php',
        'WPFactory\\WPFactory_Cross_Selling\\WPFactory_Cross_Selling' => __DIR__ . '/..' . '/wpfactory/wpfactory-cross-selling/src/php/class-wpfactory-cross-selling.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a7c3ec4b46031d59a01972b3fe86ee0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a7c3ec4b46031d59a01972b3fe86ee0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4a7c3ec4b46031d59a01972b3fe86ee0::$classMap;

        }, null, ClassLoader::class);
    }
}