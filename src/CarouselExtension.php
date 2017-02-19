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
    public function carouselFunction($options)
    {   

        $config = $this->getConfig();

        $context = [
            'options' => $options,
            'type' => $config['render']['type']
        ];
        
        switch ($config['render']['framework']) {
            case 'bootstrap4':
                $carousel = $this->renderTemplate('_carousel_bootstrap4.twig', $context);
                break;
            case 'foundation6':
                $carousel = $this->renderTemplate('_carousel_foundation6.twig', $context);
                break;
            case 'purecss':
                $carousel = $this->renderTemplate('_carousel_purecss.twig', $context);
                break;
            default:
            echo "Not a valid configuration for getting the carousel. You need to configure 'render' 
                  in the extension configuration (Dashboard->Extend->Carousel->Edit configuration." ;
        }

        echo $carousel;

    }

}
