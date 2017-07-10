<?php
/**
 * MIT License
 *
 * Copyright (c) 2017 Frank Clark

 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
namespace Fc\CustomHandles\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class LoggedIn
 * @package Fc\CustomHandles\Block
 * @author Frank Clark <mrfrankclark1@gmail.com>
 * @description Currently unused block class
 */
class LoggedIn extends Template
{
    /**
     * LoggedIn constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getLoggedInContent()
    {
        return '';
    }

}