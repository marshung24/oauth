<?php

use PHPUnit\Framework\TestCase;

/**
 * Test for PHP Unit - 
 * 
 * @author Mars.Hung <tfaredexj@gmail.com>
 */
class xxxxTest extends TestCase
{

    /**
     * *********************************************
     * ************** Public Function **************
     * *********************************************
     */

    /**
     * Test 
     */
    public function testXXXXX()
    {
        $templete = self::sortData();
        $expected = self::sortExpected();

        $result = TimePeriodHelper::sort($templete);

        $this->assertEquals($expected, $result);
    }
}
