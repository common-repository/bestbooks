<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0fcf98c24b8a612ff882ffe11c8130b3
{
    public static $classMap = array (
        'AccountTypes' => __DIR__ . '/../..' . '/class/src/accounttypes.php',
        'Asset' => __DIR__ . '/../..' . '/class/src/asset.php',
        'Bank' => __DIR__ . '/../..' . '/class/src/bank.php',
        'BestBooksException' => __DIR__ . '/../..' . '/class/src/exception.php',
        'BestBooks_DB' => __DIR__ . '/../..' . '/class/src/dbi.php',
        'Cash' => __DIR__ . '/../..' . '/class/src/cash.php',
        'ChartOfAccounts' => __DIR__ . '/../..' . '/class/src/chartofaccounts.php',
        'Credit' => __DIR__ . '/../..' . '/class/src/credit.php',
        'CurlHttpResponse' => __DIR__ . '/../..' . '/class/src/clientxmlrpc.php',
        'Equity' => __DIR__ . '/../..' . '/class/src/equity.php',
        'Expense' => __DIR__ . '/../..' . '/class/src/expense.php',
        'Income' => __DIR__ . '/../..' . '/class/src/income.php',
        'Investment' => __DIR__ . '/../..' . '/class/src/investment.php',
        'Journal' => __DIR__ . '/../..' . '/class/src/journal.php',
        'Ledger' => __DIR__ . '/../..' . '/class/src/ledger.php',
        'Liability' => __DIR__ . '/../..' . '/class/src/liability.php',
        'OwnersEquity' => __DIR__ . '/../..' . '/class/src/ownersequity.php',
        'Revenue' => __DIR__ . '/../..' . '/class/src/revenue.php',
        'SalesTaxPayable' => __DIR__ . '/../..' . '/class/src/salestax.php',
        'TAccount' => __DIR__ . '/../..' . '/class/src/taccount.php',
        'Withdrawals' => __DIR__ . '/../..' . '/class/src/withdrawals.php',
        'curl' => __DIR__ . '/../..' . '/class/src/clientxmlrpc.php',
        'curl_cache' => __DIR__ . '/../..' . '/class/src/clientxmlrpc.php',
        'xmlrpc_client' => __DIR__ . '/../..' . '/class/src/clientxmlrpc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0fcf98c24b8a612ff882ffe11c8130b3::$classMap;

        }, null, ClassLoader::class);
    }
}
