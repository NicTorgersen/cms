<?php
/**
 * @link      https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license   https://craftcms.com/license
 */

namespace craft\web\twig\variables;

use Craft;

/**
 * Class Deprecator variable.
 *
 * @author     Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since      3.0
 * @deprecated in 3.0
 */
class Deprecator
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the total number of deprecation errors that have been logged.
     *
     * @return integer
     */
    public function getTotalLogs()
    {
        Craft::$app->getDeprecator()->log('craft.deprecator.getTotalLogs()', 'craft.deprecator.getTotalLogs() has been deprecated. Use craft.app.deprecator.totalLogs instead.');

        return Craft::$app->getDeprecator()->getTotalLogs();
    }
}