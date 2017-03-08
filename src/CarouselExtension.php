<?php

namespace sablonier\carousel;

use Bolt\Extension\SimpleExtension;
use Bolt\Asset\File\Stylesheet;
use Bolt\Asset\File\JavaScript;
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
    protected function registerTwigPaths()
    {
        return [
            'templates'
        ];
    }
    
    protected function registerAssets()
    {
        $style = (new Stylesheet('css/swiper.min.css'))
            ->setZone(Zone::FRONTEND);
        $js = (new JavaScript('js/swiper.min.js'))
            ->setZone(Zone::FRONTEND);

        return [
            $style,
            $js
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
        
        switch ($config['render']['wrapper']) {
            case 'bootstrap4':
                $carousel = $this->renderTemplate('_carousel_bootstrap4.twig', $context);
                break;
            case 'foundation6':
                $carousel = $this->renderTemplate('_carousel_foundation6.twig', $context);
                break;
            case 'swiper':
                $carousel = $this->renderTemplate('_carousel_swiper.twig', $context);
                break;
            default:
                echo "No valid wrapper found.";
        }

        echo $carousel;

    }

}
