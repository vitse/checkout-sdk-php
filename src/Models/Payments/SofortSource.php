<?php

/**
 * Checkout.com
 * Authorised and regulated as an electronic money institution
 * by the UK Financial Conduct Authority (FCA) under number 900816.
 *
 * PHP version 7
 *
 * @category  SDK
 * @package   Checkout.com
 * @author    Platforms Development Team <platforms@checkout.com>
 * @copyright 2010-2019 Checkout.com
 * @license   https://opensource.org/licenses/mit-license.html MIT License
 * @link      https://docs.checkout.com/
 */

namespace Checkout\Models\Payments;

/**
 * Payment method Soford.
 *
 * @category SDK
 * @package  Checkout.com
 * @author   Platforms Development Team <platforms@checkout.com>
 * @license  https://opensource.org/licenses/mit-license.html MIT License
 * @link     https://docs.checkout.com/
 */
class SofortSource extends IdSource
{

    /**
     * Qualified name of the class.
     *
     * @var string
     */
    const QUALIFIED_NAME = __CLASS__;

    /**
     * Qualified namespace of the class.
     *
     * @var string
     */
    const QUALIFIED_NAMESPACE = __NAMESPACE__;

    /**
     * Name of the model.
     *
     * @var string
     */
    const MODEL_NAME = 'sofort';


    /**
     * Magic Methods
     */

    /**
     * Initialise Sofort source.
     */
    public function __construct()
    {
        $this->type = static::MODEL_NAME;
    }
}
