<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\View\Helper;

use Zend\View\Helper\Escaper;

/**
 * Helper for escaping values
 */
class EscapeHtmlAttr extends Escaper\AbstractHelper
{

    /**
     * Escape a value for current escaping strategy
     *
     * @param string $value
     * @return string
     */
    protected function escape($value)
    {
        return $this->getEscaper()->escapeHtmlAttr($value);
    }
}
