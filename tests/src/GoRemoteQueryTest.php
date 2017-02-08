<?php namespace JobApis\Jobs\Client\Test;

use JobApis\Jobs\Client\Queries\GoRemoteQuery;
use Mockery as m;

class GoRemoteQueryTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->query = new GoRemoteQuery();
    }

    public function testItCanGetBaseUrl()
    {
        $this->assertEquals(
            'https://goremote.io/rss',
            $this->query->getBaseUrl()
        );
    }

    public function testItCanGetKeyword()
    {
        $this->assertNull($this->query->getKeyword());
    }
}
