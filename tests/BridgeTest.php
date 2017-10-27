<?php

namespace AlexanderZabornyi\BridgeTest\Tests;

use AlexanderZabornyi\BridgeTest\Pages\AboutPage;
use AlexanderZabornyi\BridgeTest\Pages\CareersPage;
use AlexanderZabornyi\BridgeTest\Pages\ProjectsPage;
use AlexanderZabornyi\BridgeTest\Themes\AquaTheme;
use AlexanderZabornyi\BridgeTest\Themes\DarkTheme;
use AlexanderZabornyi\BridgeTest\Themes\LightTheme;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    public function testCanCreatePagesWithThemes()
    {
        $about = new AboutPage(new AquaTheme());
        $careers = new CareersPage(new DarkTheme());
        $projects = new ProjectsPage(new LightTheme());

        $this->assertEquals('About page in Light Blue', $about->getContent());
        $this->assertEquals('Careers page in Dark Black', $careers->getContent());
        $this->assertEquals('Projects page in Off White', $projects->getContent());
    }
}