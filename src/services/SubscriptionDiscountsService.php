<?php
/**
 * Subscription Discounts plugin for Craft CMS 3.x
 *
 * Enables support in Craft Commerce for Stripe coupons to be applied to a subscription.
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2021 Ryan Irelan
 */

namespace craftquest\subscriptiondiscounts\services;

use craftquest\subscriptiondiscounts\SubscriptionDiscounts;
use craftquest\subscriptiondiscounts\records\CouponRecord;
use Craft;
use craft\base\Component;

/**
 * SubscriptionDiscountsService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Ryan Irelan
 * @package   SubscriptionDiscounts
 * @since     0.1.0
 */
class SubscriptionDiscountsService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     SubscriptionDiscounts::$plugin->subscriptionDiscountsService->exampleService()
     *
     * @return mixed
     */
    public function createCoupon($coupon_code, $coupon_description)
    {
        $couponRecord = new CouponRecord([
            'coupon_code' => $coupon_code,
            'description' => $coupon_description
        ]);

        if($couponRecord->save())
        {
            return true;
        }
    }

    public function deleteCoupon($id): bool
    {
        $couponRecord = CouponRecord::find()
            ->where(['id' => $id])
            ->one();

        if ($couponRecord === null) {
            return false;
        }

        return $couponRecord->delete();
    }

    public function getCoupons()
    {
        return CouponRecord::find()->select('id, coupon_code, description')->all();
    }

    public function getCoupon($coupon_code)
    {
        return CouponRecord::find()->select('id, coupon_code, description')->where(['coupon_code' => $coupon_code])->one();
    }

}
