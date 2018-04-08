<?php

namespace EasyTopClient;

use Pimple\Container;

/**
 * @property \EasyTopClient\Kernel\Credential $credential
 * @property \EasyTopClient\Item\ItemClient $item
 * @property \EasyTopClient\Item\ItemInfoClient $itemInfo
 * @property \EasyTopClient\Item\ItemRecommendClient $itemRecommend
 * @property \EasyTopClient\Item\ItemConvertClient $convert
 * @property \EasyTopClient\Item\ItemGuessClient $guess
 * @property \EasyTopClient\Shop\ShopClient $shop
 * @property \EasyTopClient\Shop\ShopRecommendClient $shopRecommend
 * @property \EasyTopClient\Rebate\RebateOrderClient $order
 * @property \EasyTopClient\Rebate\RebateAuthClient $auth
 * @property \EasyTopClient\Uatm\UatmEventClient $uatmEvent
 * @property \EasyTopClient\Uatm\UatmEventItemClient $uatmEventItem
 * @property \EasyTopClient\Uatm\UatmFavoritesClient $uatmFavorites
 * @property \EasyTopClient\Uatm\UatmFavoritesItemClient $uatmFavoritesItem
 * @property \EasyTopClient\Tpwd\TpwdClient $tpwd
 * @property \EasyTopClient\Spread\SpreadClient $spread
 * @property \EasyTopClient\Ju\JuClient $ju
 * @property \EasyTopClient\Content\ContentClient $content
 * @property \EasyTopClient\Coupon\CouponClient $coupon
 * @property \EasyTopClient\Dg\DgCouponClient $dgCoupon
 * @property \EasyTopClient\Material\ScMaterialClient $scMaterial
 * @property \EasyTopClient\Material\DgMaterialClient $dgMaterial
 * @property \EasyTopClient\NewUser\ScNewUserClient $scNewUser
 * @property \EasyTopClient\NewUser\DgNewUserClient $dgNewUser
 */
class Application extends Container
{
    protected $providers = [
        Kernel\ServiceProvider::class,
        Item\ServiceProvider::class,
        Shop\ServiceProvider::class,
        Rebate\ServiceProvider::class,
        Uatm\ServiceProvider::class,
        Tpwd\ServiceProvider::class,
        Spread\ServiceProvider::class,
        Ju\ServiceProvider::class,
        Content\ServiceProvider::class,
        Coupon\ServiceProvider::class,
        Dg\ServiceProvider::class,
        Material\ServiceProvider::class,
        NewUser\ServiceProvider::class
    ];

    /**
     * Application constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        parent::__construct();

        $this['config'] = $config;

        $this->registerProviders();
    }

    /**
     * Register providers.
     */
    protected function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->register(new $provider());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function __get($id)
    {
        return $this->offsetGet($id);
    }
}
