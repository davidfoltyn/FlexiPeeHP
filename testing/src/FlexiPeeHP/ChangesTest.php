<?php

namespace Test\FlexiPeeHP;

use FlexiPeeHP\Changes;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-05-24 at 14:37:24.
 */
class ChangesTest extends FlexiBeeROTest
{
    /**
     * @var Changes
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Changes();
    }

    /**
     * @covers FlexiPeeHP\Changes::enable
     */
    public function testEnable()
    {
        $this->object->enable();
        $this->assertTrue($this->object->getStatus());
    }

    /**
     * @covers FlexiPeeHP\Changes::getFlexiData
     */
    public function testGetFlexiData()
    {
        /**
         * Make Some Changes First ...
         */
        $address = new \FlexiPeeHP\Adresar();
        $address->setDataValue('nazev', \Ease\Sand::randomString());
        $address->setDataValue('poznam', 'Unit Test Random Record');
        $address->insertToFlexiBee();

        $flexidata = $this->object->getFlexiData();

        if (isset($flexidata['message']) && ($flexidata['message'] == 'Changelog is not enabled')) {
            $this->markTestSkipped('Changelog is not enabled');
        } else {
            if (count($flexidata)) {
                $this->assertArrayHasKey(0, $flexidata);
            } else {
                $this->markTestSkipped('Changelog is empty ?');
            }
        }

        $address->deleteFromFlexiBee();
    }

    /**
     * @covers FlexiPeeHP\Changes::recordExists
     */
    public function testRecordExists()
    {
        $this->assertNull($this->object->recordExists());
    }

    /**
     * @covers FlexiPeeHP\Changes::disable
     */
    public function testDisable()
    {
        $this->object->disable();
        $this->assertFalse($this->object->getStatus());
    }

    /**
     * @covers FlexiPeeHP\Changes::getStatus
     */
    public function testGetStatus()
    {
        $status = $this->object->getStatus();
        $this->assertInternalType('boolean', $status);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
        
    }
}
