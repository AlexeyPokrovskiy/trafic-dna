<?php
require './vendor/autoload.php';

use \PHPUnit\Framework\TestCase;

/**  * get the number which occurs odd times in the source array  *  *
 * @param
 * $arrValues array  *
 * @return int
 */
function getOddNumber($srcValues) {
    $arr_count = count($srcValues);
    $count = 0;
    for ($i = 0; $i < $arr_count; $i++)
    {
        for ($j = 0; $j < $arr_count; $j++)
        {
            if ($srcValues[$i] == $srcValues[$j])
                $count++;
        }

        if ($count % 2 != 0)
            return $srcValues[$i];
    }
}

class OddNumberTest extends TestCase {
    public function testOddNumber()
    {
        $result = getOddNumber([2,5,9,1,5,1,8,2,8]);
        $this->assertEquals(9,$result);
        $result = getOddNumber([2,3,4,3,1,4,5,1,4,2,5]);
        $this->assertEquals(4,$result);
    }
}

$test = new OddNumberTest();
$test->testOddNumber();