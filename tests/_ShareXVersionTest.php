<?php
declare(strict_types=1);

require_once 'src/u/functions.php';

$GLOBALS['config'] = include 'src/u/config.php';


use PHPUnit\Framework\TestCase;

final class ShareXVersionTest extends TestCase
{
    private $config;

    public function __constructor(): void {
      $this->config = $GLOBALS['config'];
    }

    /** @test */
    public function canGetVersion(): void
    {
        $version = get_latest_sharex_version();

        $this->assertRegExp('/[0-9]+\.[0-9]+\.[0-9]+$/i', $version);

    }
}





