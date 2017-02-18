<?php

namespace sablonier\carousel;

use Bolt\Extension\SimpleExtension;

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
    
    //protected function getDefaultConfig()
    //{
    //    return [
    //        'config' => [
    //            'framework' => 'bootstrap4',
    //        ]
    //    ];
    //}

    /**
     * Render and return the twig file templates/_carousel.twig
     *
     * @return carousel
     */
    public function carouselFunction($record, $start, $nav, $bullets, $titel, $caption)
    {   
        // Loads the configuration from app/config/extensions/carousel.sablonier.yml
        // Extension sample configuration file is config/config.yml.dist
        $config = $this->getConfig();
    
        // Mixin context from template and configuration
        $context = [
            'record' => $record,
            'type' => $config['render']['type'],
            'start' => $start,
            'nav' => $nav,
            'bullets' => $bullets,
            'titel' => $titel,
            'caption' => $caption
        ];
        
        switch ($config['render']['framework']) {
            case 'bootstrap4':
                $carousel = $this->renderTemplate('_carousel_bootstrap4.twig', $context);
                break;
            case 'foundation6':
                $carousel = $this->renderTemplate('_carousel_foundation6.twig', $context);
                break;
            default:
            echo "Not a valid configuration for this extension. You need to configure 'framework:' 
                  in 'config.yml' of carousel extension. Options are: bootstrap4, foundation6, purecss." ;
        }

        echo $carousel;

    }

}
