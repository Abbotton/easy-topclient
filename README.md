# easy-topclient
简单易用的PHP淘宝客SDK.:heart_eyes::punch::punch:

# 安装(installation)
```php
composer require abbotton/easy-topclient
```

# 使用(How to use)
```php
...
use Abbotton\EasyTopClient\Application;

$config = [
    'app_key' => 'APP_KEY',
    'app_secret' => 'APP_SECRET',
];

$app = new Application($config);
$items = $app->item
    ->setQ('女装')
    ->setFields('num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick')
    ->setCat('16, 18')
    ->setPageNo(1)
    ->setPageSize(33)
    ->get();
    
var_dump($items);
...
```

| 接口名称 | 接口地址 | 调用 |
| --------   | -----: | -----: |
| 淘宝客商品查询 | `taobao.tbk.item.get` | `$app->item` |
| 淘宝客商品链接转换 | `taobao.tbk.item.convert` | `$app->covert` |
| 淘宝客商品猜你喜欢 | `taobao.tbk.item.guess.like` | `$app->guess` |
| 淘客媒体内容输出 | `taobao.tbk.content.get` | `$app->content` |
| 淘宝客商品关联推荐查询 | `taobao.tbk.item.recommend.get` | `$app->itemRecommend` |
| 淘宝客商品详情(简版) | `taobao.tbk.item.info.get` | `$app->itemInfo` |
| 淘宝客店铺查询 | `taobao.tbk.shop.get` | `$app->shopGet` |
| 淘宝客店铺关联推荐查询 | `taobao.tbk.shop.recommend.get` | `$app->shopRecommend` |
| 淘宝客返利授权查询 | `taobao.tbk.rebate.auth.get` | `$app->auth` |
| 淘宝客返利订单查询 | `taobao.tbk.rebate.order.get` | `$app->order` |
| 枚举正在进行中的定向招商的活动列表 | `taobao.tbk.uatm.event.get` | `$app->uatmEvent` |
| 获取淘宝联盟定向招商的宝贝信息 | `taobao.tbk.uatm.event.item.get` | `$app->uatmEventItem` |
| 获取淘宝联盟选品库的宝贝信息 | `taobao.tbk.uatm.favorites.item.get` | `$app->uatmFavorites` |
| 获取淘宝联盟选品库列表 | `taobao.tbk.uatm.favorites.get` | `$app->uatmFavoritesItem` |
| 淘抢购api | `taobao.tbk.ju.tqg.get` | `$app->juTqg` |
| 物料传播方式获取 | `taobao.tbk.spread.get` | `$app->spread` |
| 聚划算商品搜索接口 | `taobao.ju.items.search` | `$app->juSearch` |
| 好券清单API【导购】 | `taobao.tbk.dg.item.coupon.get` | `$app->dgCoupon` |
| 阿里妈妈推广券信息查询 | `taobao.tbk.coupon.get` | `$app->coupon` |
| 淘宝客淘口令 | `taobao.tbk.tpwd.create` | `$app->tpwd` |
| 淘宝客新用户订单API--导购 | `taobao.tbk.dg.newuser.order.get` | `$app->dgNewUser` |
| 淘宝客新用户订单API--社交 | `taobao.tbk.sc.newuser.order.get` | `$app->scNewUser` |
| 通用物料搜索API | `taobao.tbk.sc.material.optional` | `$app->scMaterial` |
| 通用物料搜索API(导购) | `taobao.tbk.dg.material.optional` | `$app->dgMaterial` |
