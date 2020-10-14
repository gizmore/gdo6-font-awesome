<?php
namespace GDO\FontAwesome\Test;

use PHPUnit\Framework\TestCase;
use GDO\UI\GDT_IconUTF8;
use function PHPUnit\Framework\assertTrue;
use GDO\FontAwesome\FA_Icon;

final class IconTest extends TestCase
{
    /**
     * Check if every icon is defined for font awesome icons.
     */
    public function testAllIcons()
    {
        foreach (GDT_IconUTF8::$MAP as $key => $icon)
        {
            assertTrue(isset(FA_Icon::$MAP[$key]), "checking if Icon $key is defined in FA.");
        }
    }

}
