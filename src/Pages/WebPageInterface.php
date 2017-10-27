<?php

namespace AlexanderZabornyi\BridgeTest\Pages;

use AlexanderZabornyi\BridgeTest\Themes\ThemeInterface;

interface WebPageInterface
{
    public function __construct(ThemeInterface $theme);

    public function getContent(): string;
}