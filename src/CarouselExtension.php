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

    /**
     * Render and return the twig file templates/_carousel.twig
     *
     * @return carousel
     */
    public function carouselFunction($record, $start, $nav, $bullets, $titel, $caption)
    {   
		
	    $framework = ('bootstrap4');

		$context = [
            'record' => $record,
            'start' => $start,
            'nav' => $nav,
            'bullets' => $bullets,
            'titel' => $titel,
            'caption' => $caption
        ];
        
        $carousel = $this->renderTemplate('_carousel_bootstrap4.twig', $context);

        echo $carousel;

    }

}
