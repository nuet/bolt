<?php
namespace Bolt\Tests\Extensions;

use Bolt\Tests\BoltUnitTest;
use Bolt\Extensions\StatService;

/**
 * Class to test src/Extensions/StatService.
 *
 * @author Ross Riley <riley.ross@gmail.com>
 *
 */
class StatServiceTest extends BoltUnitTest
{

    public function testSetup()
    {
        $app = $this->getApp();
        $stat = $this->getMock('Bolt\Extensions\StatService', array('recordInstall'), array($app));

        $stat = $this->getMock('Bolt\Extensions\StatService', array('recordInstall'), array($app));
        $stat->expects($this->once())
            ->method('recordInstall')
            ->with('mytest', '1.0.0');
        $stat->recordInstall("mytest",'1.0.0');
    }

}

namespace Bolt\Extensions;

// Left for info, this mock function is called on this test
// function file_get_contents($url)
// {
//     return $url;
// }