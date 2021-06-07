<?php
/**
 * Subscription Discounts plugin for Craft CMS 3.x
 *
 * Enables support in Craft Commerce for Stripe coupons to be applied to a subscription.
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2021 Ryan Irelan
 */

namespace craftquest\subscriptiondiscounts\records;

use craftquest\subscriptiondiscounts\SubscriptionDiscounts;

use Craft;
use craft\db\ActiveRecord;

/**
 * SubscriptionDiscountsRecord Record
 * @property int $id
 * @property datetime $dateCreated
 * @property datetime $dateUpdated
 * @property char $uid
 * @property text @coupon_code
 * @property text @description
 * @property boolean @enabled
 * 
 * @author    Ryan Irelan
 * @package   SubscriptionDiscounts
 * @since     0.1.0
 */
class CouponRecord extends ActiveRecord
{
    // Public Static Methods
    // =========================================================================

     /**
     *
     * @return string the table name
     */
    public static function tableName()
    {
        return '{{%subscriptiondiscounts_coupons}}';
    }
}
