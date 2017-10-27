<?php

namespace AlexanderZabornyi\BridgeTest\Themes;

class DarkTheme implements ThemeInterface
{
    /**
     * Получить цвет
     *
     * @return string
     */
    public function getColor(): string
    {
        return 'Dark Black';
    }
}