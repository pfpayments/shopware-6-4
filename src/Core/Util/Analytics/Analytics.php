<?php declare(strict_types=1);

namespace PostFinanceCheckoutPayment\Core\Util\Analytics;

use PostFinanceCheckout\Sdk\ApiClient;

/**
 * Class Analytics
 *
 * @package PostFinanceCheckoutPayment\Core\Util\Analytics
 */
class Analytics {

	public const SHOP_SYSTEM             = 'x-postfinancecheckout-shop-system';
	public const SHOP_SYSTEM_VERSION     = 'x-postfinancecheckout-shop-system-version';
	public const SHOP_SYSTEM_AND_VERSION = 'x-postfinancecheckout-shop-system-and-version';
	public const PLUGIN_FEATURE          = 'x-postfinancecheckout-shop-plugin-feature';

	/**
	 * @return array
	 */
	public static function getDefaultData()
	{
		return [
			self::SHOP_SYSTEM             => 'shopware',
			self::SHOP_SYSTEM_VERSION     => '6',
			self::SHOP_SYSTEM_AND_VERSION => 'shopware-6',
		];
	}

	/**
	 * @param \PostFinanceCheckout\Sdk\ApiClient $apiClient
	 */
	public static function addHeaders(ApiClient &$apiClient)
	{
		$data = self::getDefaultData();
		foreach ($data as $key => $value) {
			$apiClient->addDefaultHeader($key, $value);
		}
	}
}


