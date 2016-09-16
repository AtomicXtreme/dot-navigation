<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-navigation
 * @author: n3vrax
 * Date: 6/5/2016
 * Time: 5:20 PM
 */

namespace Dot\Navigation\Factory;

use Dot\Navigation\Options\MenuOptions;
use Dot\Navigation\Service\Navigation;
use Dot\Navigation\View\NavigationRenderer;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

/**
 * Class NavigationRendererFactory
 * @package Dot\Navigation\Factory
 */
class NavigationRendererFactory
{
    /**
     * @param ContainerInterface $container
     * @return NavigationRenderer
     */
    public function __invoke(ContainerInterface $container)
    {
        $options = $container->get(MenuOptions::class);
        $navigation = $container->get(Navigation::class);
        $template = $container->get(TemplateRendererInterface::class);

        return new NavigationRenderer($navigation, $template, $options);

    }
}