<?php

namespace Test\FlexiPeeHP;

use FlexiPeeHP\FlexiBeeRW;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-04 at 10:08:36.
 */
class FlexiBeeRWTest extends FlexiBeeROTest
{
    /**
     * Poznámka vkládaná do záznamů vytvářených během testů
     * @var strig 
     */
    public $poznam = 'Generováno UnitTestem PHP Knihovny https://github.com/Spoje-NET/FlexiPeeHP';

    /**
     * @var FlexiBeeRW
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     * @covers FlexiPeeHP\FlexiBeeRW::__construct
     */
    protected function setUp()
    {
        $this->object = new FlexiBeeRW();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::getLastInsertedId
     * @depends testInsertToFlexiBee
     */
    public function testGetLastInsertedId()
    {
        $this->assertNotEmpty($this->object->getLastInsertedId());
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::insertToFlexiBee
     */
    public function testInsertToFlexiBee()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRWRW::deleteFromFlexiBee
     */
    public function testDeleteFromFlexiBee()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::timestampToFlexiDate
     */
    public function testTimestampToFlexiDate()
    {
        $this->assertNull($this->object->timestampToFlexiDate());
        $this->assertEquals('2016-09-16',
            $this->object->timestampToFlexiDate('1474040506'));
    }

    /**
     * @covers FlexiPeeHP\FlexiBeeRW::timestampToFlexiDateTime
     */
    public function testTimestampToFlexiDateTime()
    {
        $this->assertNull($this->object->timestampToFlexiDateTime());
        $this->assertEquals('2016-09-16UTC15:41:46',
            $this->object->timestampToFlexiDateTime('1474040506'));
    }

}
