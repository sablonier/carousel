<?php

namespace sablonier\bootstrap4carousel;

use Bolt\Extension\SimpleExtension;

class Bootstrap4CarouselExtension extends SimpleExtension
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

    /**
     * Render and return the twig file templates/_carousel.twig
     *
     * @return carousel
     */
    public function carouselFunction($record)
    {   

		$context = [
            'record' => $record
        ];
        
        $carousel = $this->renderTemplate('_carousel.twig', $context);
        /* Never ever as return? */
        echo $carousel;

    }

}
