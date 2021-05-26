<?php
/**
 * Subscription Discounts plugin for Craft CMS 3.x
 *
 * Introduces support for Stripe discounts in Craft Commerce subscriptions.
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2021 Ryan Irelan
 */

namespace craftquest\subscriptiondiscountstests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use craftquest\subscriptiondiscounts\SubscriptionDiscounts;

/**
 * ExampleUnitTest
 *
 *
 * @author    Ryan Irelan
 * @package   SubscriptionDiscounts
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            SubscriptionDiscounts::class,
            SubscriptionDiscounts::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
