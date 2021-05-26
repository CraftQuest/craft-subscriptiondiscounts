<?php
/**
 * Subscription Discounts plugin for Craft CMS 3.x
 *
 * Introduces support for Stripe discounts in Craft Commerce subscriptions.
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2021 Ryan Irelan
 */

namespace craftquest\subscriptiondiscounts\services;

use craftquest\subscriptiondiscounts\SubscriptionDiscounts;

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
 * @since     1.0.0
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
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
