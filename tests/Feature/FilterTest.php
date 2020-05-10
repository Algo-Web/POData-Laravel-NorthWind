<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 1/02/20
 * Time: 2:18 AM
 */

class FilterTest extends TestCase
{
    public function testGetCustomersWithFilter()
    {
        $url = '/odata.svc/Customers?$filter=first_name eq \'simon\'';

        $result = $this->get($url);
        $this->assertEquals(200, $result->getStatusCode());
    }

    public function testGetCustomersWithFilterAndCount()
    {
        $url = '/odata.svc/Customers/$count?$filter=first_name eq \'simon\'';

        $result = $this->get($url);
        $this->assertEquals(200, $result->getStatusCode());
    }
}