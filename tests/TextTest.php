<?php
/**
 * This file is part of the romanpitak/nginx-config-processor package.
 *
 * (c) Roman Piták <roman@pitak.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace wanlxp\Nginx\Config;

class TextTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @expectedException \wanlxp\Nginx\Config\Exception
     */
    public function testGetCharPosition()
    {
        $text = new Text('');
        $text->getChar(1.5);
    }

    /**
     * @expectedException \wanlxp\Nginx\Config\Exception
     */
    public function testGetCharEof()
    {
        $text = new Text('');
        $text->getChar(1);
    }

    public function testGetLastEol()
    {
        $text = new Text('');
        $this->assertEquals(0, $text->getLastEol());
    }

    public function testGetNextEol()
    {
        $text = new Text("\n");
        $this->assertEquals(0, $text->getNextEol());
        $text = new Text("roman");
        $this->assertEquals(4, $text->getNextEol());
    }

}
