<?php

namespace sablonier\carousel;

use Bolt\Asset\File\Stylesheet;
use Bolt\Asset\File\JavaScript;
use Bolt\Extension\SimpleExtension;
use Bolt\Controller\Zone;

class CarouselExtension extends SimpleExtension
{

    /**
     * {@inheritdoc}
     */
    protected function registerTwigFunctions()
    {
        return [
            'carousel'    => ['carouselFunction']
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    protected function registerAssets()
    {
        return [
            new JavaScript('extensions/vendor/sablonier/carousel/slick/slick.js'),
            new Stylesheet('extensions/vendor/sablonier/carousel/slick/slick.css'),
        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function registerTwigPaths()
    {
        return [
            'templates'
        ];
    }

    /**
     * Render and return the twig file templates/_carousel.twig
     *
     * @return carousel
     */
    public function carouselFunction($options)
    {   

        $config = $this->getConfig();

        $context = [
            'options' => $options,
        ];
        
        switch ($config['render']['framework']) {
            case 'bootstrap4':
                $carousel = $this->renderTemplate('_carousel_bootstrap4.twig', $context);
                break;
            case 'foundation6':
                $carousel = $this->renderTemplate('_carousel_foundation6.twig', $context);
                break;
            case 'slickslider':
                $carousel = $this->renderTemplate('_carousel_slickslider.twig', $context);
                break;
        }

        echo $carousel;

    }

}
