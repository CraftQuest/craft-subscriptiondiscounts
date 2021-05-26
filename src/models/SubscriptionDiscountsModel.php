<?php
/**
 * Subscription Discounts plugin for Craft CMS 3.x
 *
 * Introduces support for Stripe discounts in Craft Commerce subscriptions.
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2021 Ryan Irelan
 */

namespace craftquest\subscriptiondiscounts\models;

use craftquest\subscriptiondiscounts\SubscriptionDiscounts;

use Craft;
use craft\base\Model;

/**
 * SubscriptionDiscountsModel Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Ryan Irelan
 * @package   SubscriptionDiscounts
 * @since     1.0.0
 */
class SubscriptionDiscountsModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
