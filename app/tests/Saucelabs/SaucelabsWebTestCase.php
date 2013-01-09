<?php

namespace Sandbox\Saucelabs;

use Sauce\Sausage\WebDriverTestCase;
use Sandbox\NewsTest;

/**
 * Base class for all CMF Sandbox frontend tests using Saucelabs
 */
abstract class SaucelabsWebTestCase extends WebDriverTestCase
{
    protected $newsUrl = 'http://cmf.lo/app_test.php/en/news';
    protected $homeUrl = 'http://cmf.lo/app_test.php';

    public static $browsers = array(
        // run FF17 on Linux on Sauce
        array(
            'browserName' => 'firefox',
            'desiredCapabilities' => array(
                'version' => '17',
                'platform' => 'Linux'
            ),
        )
    );

    public function setUp()
    {
        //load the fixtures through one of the normal WebTestCase objects
        $webTestCase = new NewsTest();
        $webTestCase->setUp();

        parent::setUp();
    }
}
