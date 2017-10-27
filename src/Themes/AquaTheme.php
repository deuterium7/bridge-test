<?php

namespace AlexanderZabornyi\BridgeTest\Themes;

class AquaTheme implements ThemeInterface
{
    /**
     * Получить цвет
     *
     * @return string
     */
    public function getColor(): string
    {
        return 'Light Blue';
    }
}