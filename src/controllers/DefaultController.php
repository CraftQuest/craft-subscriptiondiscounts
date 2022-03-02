<?php
/**
 * Subscription Discounts plugin for Craft CMS 3.x
 *
 * Enables support in Craft Commerce for Stripe coupons to be applied to a subscription.
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2021 Ryan Irelan
 */

namespace craftquest\subscriptiondiscounts\controllers;

use craftquest\subscriptiondiscounts\SubscriptionDiscounts;

use Craft;
use craft\web\Controller;

/**
 * Default Controller
 *
 * Generally speaking, controllers are the middlemen between the front end of
 * the CP/website and your plugin’s services. They contain action methods which
 * handle individual tasks.
 *
 * A common pattern used throughout Craft involves a controller action gathering
 * post data, saving it on a model, passing the model off to a service, and then
 * responding to the request appropriately depending on the service method’s response.
 *
 * Action methods begin with the prefix “action”, followed by a description of what
 * the method does (for example, actionSaveIngredient()).
 *
 * https://craftcms.com/docs/plugins/controllers
 *
 * @author    Ryan Irelan
 * @package   SubscriptionDiscounts
 * @since     0.1.0
 */
class DefaultController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected array|bool|int $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * Handle a request going to our plugin's index action URL,
     * e.g.: actions/subscription-discounts/default
     *
     * @return mixed
     */
    public function actionSaveCoupon()
    {
        $coupon_code = Craft::$app->getRequest()->getParam('coupon_code');
        $coupon_description = Craft::$app->getRequest()->getParam('description');
        if (!SubscriptionDiscounts::$plugin->subscriptionDiscountsService->createCoupon($coupon_code, $coupon_description)) {
            return $this->_getError('Could not add the coupon.');
        }

    }

    public function actionDeleteCoupon()
    {
        $id = Craft::$app->getRequest()->getParam('id');
        if(!SubscriptionDiscounts::$plugin->subscriptionDiscountsService->deleteCoupon($id)) {
            return $this->_getError('There was a problem deleting the coupon.');
        }
    }


    private function _getError(string $message = '')
    {
        if (Craft::$app->getRequest()->getAcceptsJson()) {
            return $this->asJson([
                'success' => false,
                'message' => $message,
            ]);
        }

        Craft::$app->getSession()->setError($message);

        return null;
    }
}

