<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6cd124e390a8183021a13f74e011a42
{
    public static $classMap = array (
        'AdminAjaxPsgdprController' => __DIR__ . '/../..' . '/controllers/admin/AdminAjaxPsgdprController.php',
        'AdminDownloadInvoicesPsgdprController' => __DIR__ . '/../..' . '/controllers/admin/AdminDownloadInvoicesPsgdprController.php',
        'GDPRConsent' => __DIR__ . '/../..' . '/classes/GDPRConsent.php',
        'GDPRLog' => __DIR__ . '/../..' . '/classes/GDPRLog.php',
        'HTMLTemplatePSGDPRModule' => __DIR__ . '/../..' . '/classes/HTMLTemplatePSGDPRModule.php',
        'Psgdpr' => __DIR__ . '/../..' . '/psgdpr.php',
        'psgdprExportDataToCsvModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/ExportDataToCsv.php',
        'psgdprExportDataToPdfModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/ExportDataToPdf.php',
        'psgdprFrontAjaxGdprModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/FrontAjaxGdpr.php',
        'psgdprgdprModuleFrontController' => __DIR__ . '/../..' . '/controllers/front/gdpr.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc6cd124e390a8183021a13f74e011a42::$classMap;

        }, null, ClassLoader::class);
    }
}