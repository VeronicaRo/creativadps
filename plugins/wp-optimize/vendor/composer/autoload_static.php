<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4f181c817bb7f56c650b242f9d1d695
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tubalmartin\\CssMin\\' => 19,
        ),
        'W' => 
        array (
            'WebPConvert\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'L' => 
        array (
            'LocateBinaries\\' => 15,
        ),
        'I' => 
        array (
            'Intervention\\HttpAuth\\' => 22,
            'ImageMimeTypeSniffer\\' => 21,
            'ImageMimeTypeGuesser\\' => 21,
        ),
        'H' => 
        array (
            'HtaccessCapabilityTester\\' => 25,
        ),
        'F' => 
        array (
            'FileUtil\\' => 9,
        ),
        'E' => 
        array (
            'ExecWithFallback\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tubalmartin\\CssMin\\' => 
        array (
            0 => __DIR__ . '/..' . '/tubalmartin/cssmin/src',
        ),
        'WebPConvert\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/webp-convert/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'LocateBinaries\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/locate-binaries/src',
        ),
        'Intervention\\HttpAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/httpauth/src',
        ),
        'ImageMimeTypeSniffer\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/image-mime-type-sniffer/src',
        ),
        'ImageMimeTypeGuesser\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/image-mime-type-guesser/src',
        ),
        'HtaccessCapabilityTester\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/htaccess-capability-tester/src',
        ),
        'FileUtil\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/file-util/src',
        ),
        'ExecWithFallback\\' => 
        array (
            0 => __DIR__ . '/..' . '/rosell-dk/exec-with-fallback/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Props\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/props-dic/src',
            ),
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'J' => 
        array (
            'JSMin\\' => 
            array (
                0 => __DIR__ . '/..' . '/mrclay/jsmin-php/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'HTTP_ConditionalGet' => __DIR__ . '/..' . '/mrclay/minify/lib/HTTP/ConditionalGet.php',
        'HTTP_Encoder' => __DIR__ . '/..' . '/mrclay/minify/lib/HTTP/Encoder.php',
        'Minify' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify.php',
        'Minify\\App' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/App.php',
        'Minify\\Config' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Config.php',
        'Minify\\JS\\JShrink' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/JS/JShrink.php',
        'Minify\\Logger\\LegacyHandler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Logger/LegacyHandler.php',
        'Minify_Build' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Build.php',
        'Minify_CSS' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSS.php',
        'Minify_CSS_Compressor' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSS/Compressor.php',
        'Minify_CSS_UriRewriter' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSS/UriRewriter.php',
        'Minify_CSSmin' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CSSmin.php',
        'Minify_CacheInterface' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CacheInterface.php',
        'Minify_Cache_APC' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/APC.php',
        'Minify_Cache_APCu' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/APCu.php',
        'Minify_Cache_File' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/File.php',
        'Minify_Cache_Memcache' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/Memcache.php',
        'Minify_Cache_Null' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/Null.php',
        'Minify_Cache_WinCache' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/WinCache.php',
        'Minify_Cache_XCache' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/XCache.php',
        'Minify_Cache_ZendPlatform' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Cache/ZendPlatform.php',
        'Minify_ClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ClosureCompiler.php',
        'Minify_ClosureCompiler_Exception' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ClosureCompiler.php',
        'Minify_CommentPreserver' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/CommentPreserver.php',
        'Minify_ControllerInterface' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ControllerInterface.php',
        'Minify_Controller_Base' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Base.php',
        'Minify_Controller_Files' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Files.php',
        'Minify_Controller_Groups' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Groups.php',
        'Minify_Controller_MinApp' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/MinApp.php',
        'Minify_Controller_Page' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Controller/Page.php',
        'Minify_DebugDetector' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/DebugDetector.php',
        'Minify_Env' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Env.php',
        'Minify_HTML' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/HTML.php',
        'Minify_HTML_Helper' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/HTML/Helper.php',
        'Minify_ImportProcessor' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ImportProcessor.php',
        'Minify_JS_ClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/JS/ClosureCompiler.php',
        'Minify_JS_ClosureCompiler_Exception' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/JS/ClosureCompiler.php',
        'Minify_LessCssSource' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/LessCssSource.php',
        'Minify_Lines' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Lines.php',
        'Minify_NailgunClosureCompiler' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/NailgunClosureCompiler.php',
        'Minify_Packer' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Packer.php',
        'Minify_ScssCssSource' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ScssCssSource.php',
        'Minify_ServeConfiguration' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/ServeConfiguration.php',
        'Minify_Source' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Source.php',
        'Minify_SourceInterface' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/SourceInterface.php',
        'Minify_SourceSet' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/SourceSet.php',
        'Minify_Source_Factory' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Source/Factory.php',
        'Minify_Source_FactoryException' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/Source/FactoryException.php',
        'Minify_YUICompressor' => __DIR__ . '/..' . '/mrclay/minify/lib/Minify/YUICompressor.php',
        'MrClay\\Cli' => __DIR__ . '/..' . '/mrclay/minify/lib/MrClay/Cli.php',
        'MrClay\\Cli\\Arg' => __DIR__ . '/..' . '/mrclay/minify/lib/MrClay/Cli/Arg.php',
        'lessc' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_formatter_classic' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_formatter_compressed' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_formatter_lessjs' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'lessc_parser' => __DIR__ . '/..' . '/marcusschwarz/lesserphp/lessc.inc.php',
        'simplehtmldom\\Debug' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/Debug.php',
        'simplehtmldom\\HtmlDocument' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/HtmlDocument.php',
        'simplehtmldom\\HtmlElement' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/HtmlElement.php',
        'simplehtmldom\\HtmlNode' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/HtmlNode.php',
        'simplehtmldom\\HtmlWeb' => __DIR__ . '/..' . '/simplehtmldom/simplehtmldom/HtmlWeb.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4f181c817bb7f56c650b242f9d1d695::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4f181c817bb7f56c650b242f9d1d695::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite4f181c817bb7f56c650b242f9d1d695::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite4f181c817bb7f56c650b242f9d1d695::$classMap;

        }, null, ClassLoader::class);
    }
}
