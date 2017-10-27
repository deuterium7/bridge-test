<?php

namespace AlexanderZabornyi\BridgeTest\Pages;

use AlexanderZabornyi\BridgeTest\Themes\ThemeInterface;

class ProjectsPage implements WebPageInterface
{
    protected $theme;

    /**
     * Добавить тему странице
     *
     * @param ThemeInterface $theme
     */
    public function __construct(ThemeInterface $theme)
    {
        $this->theme = $theme;
    }

    /**
     * Вывести содержание страницы
     *
     * @return string
     */
    public function getContent(): string
    {
        return 'Projects page in ' . $this->theme->getColor();
    }
}