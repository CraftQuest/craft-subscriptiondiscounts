<?php
/**
 * Subscription Discounts plugin for Craft CMS 3.x
 *
 * Enables support in Craft Commerce for Stripe coupons to be applied to a subscription.
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2021 Ryan Irelan
 */

namespace craftquest\subscriptiondiscounts\variables;

use craftquest\subscriptiondiscounts\SubscriptionDiscounts;

use Craft;

/**
 * Subscription Discounts Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.subscriptionDiscounts }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Ryan Irelan
 * @package   SubscriptionDiscounts
 * @since     0.1.0
 */
class SubscriptionDiscountsVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.subscriptionDiscounts.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.subscriptionDiscounts.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
