<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 1/2/2020
 * Time: 6:41 PM
 */

/**
 * Chuyển json về mảng php
 */
$json1 = '[{"ten":"h\u00e0 n\u1ed9i","gpd":"10 t\u1ef7 USD"},{"ten":"h\u1ed3 ch\u00ed minh","gpd":"15 t\u1ef7 USD"},{"ten":"b\u1eafc ninh","gpd":"5 t\u1ef7 USD"}]';

$mang1 = json_decode($json1);

echo "<pre>";
print_r($json1);
echo "</pre>";

echo "<pre>";
print_r($mang1);
echo "</pre>";

