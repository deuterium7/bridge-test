<?php

namespace AlexanderZabornyi\BridgeTest\Themes;

class LightTheme implements ThemeInterface
{
    /**
     * Получить цвет
     *
     * @return string
     */
    public function getColor(): string
    {
        return 'Off White';
    }
}