<?php

/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Project\CustomPdf\Model\Order\Pdf;

class Invoice extends \Magento\Sales\Model\Order\Pdf\Invoice
{
	/**
     * Set font as regular
     *
     * @param  \Zend_Pdf_Page $object
     * @param  int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontRegular($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->getFontsDir() . ('devaju-sans/DejaVuSans.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }
    /**
     * Set font as bold
     *
     * @param  \Zend_Pdf_Page $object
     * @param  int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontBold($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->getFontsDir() . ('devaju-sans/DejaVuSans-Bold.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }
    /**
     * Set font as italic
     *
     * @param  \Zend_Pdf_Page $object
     * @param  int $size
     * @return \Zend_Pdf_Resource_Font
     */
    protected function _setFontItalic($object, $size = 7)
    {
        $font = \Zend_Pdf_Font::fontWithPath(
            $this->getFontsDir() . ('devaju-sans/DejaVuSansCondensed-Oblique.ttf')
        );
        $object->setFont($font, $size);
        return $font;
    }
    protected function getFontsDir()
    {
        $path = 'lib/internal/';
        return $this->_rootDirectory->getAbsolutePath($path);
    }
}