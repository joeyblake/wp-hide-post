<?php
include_once __DIR__ . "/LicenseManager.php";
include_once __DIR__ . "/LicenseItem.php";
include_once __DIR__ . "/encryption.php";
if (!defined('OPENSSL_RAW_DATA'))
{
    define('OPENSSL_RAW_DATA', 1);
}
if (!function_exists('scb_license_manager'))
{
    function scb_license_manager()
    {
        return SCB_LicenseManager::getInstance();
    }
}
if (!function_exists('scb_get_license'))
{
    function scb_get_license($item)
    {
        return scb_license_manager()->item($item);
    }
}
