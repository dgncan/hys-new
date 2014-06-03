<?php
namespace Hys\Core;

/**
 * Firma id bulucu
 */
class FindCompanyId
{

    private static $companyIds;

    private static $aktiveCompanyId = 18;

    public static function get()
    {

        self::$companyIds = include(__DIR__ . '/CompanyId.php');

        self::$aktiveCompanyId = self::$companyIds[$_SERVER['SERVER_NAME']];

        return self::$aktiveCompanyId;

    }
} 