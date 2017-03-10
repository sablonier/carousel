Carousel for Bolt CMS
=====================

Example configuration:

```
render:
    framework: foundation6
```
#### Options: foundation6, bootstrap4, swiper

[Foundation](http://foundation.zurb.com/sites/docs/orbit.html) It's a simple orbit. This wrapper is compatible with base-2016 standard theme of Bolt CMS

[Bootstrap 4](https://v4-alpha.getbootstrap.com/components/carousel/): Bootstrap 4 alpha 6 carousel, needs bootstrap 4 js/css included in templates

[Swiper](http://idangero.us/swiper/): Some kind of a fallback in case foundation nor bootstrap is not available

####Carousel options, example usage in templates

a) Show 'myrepeater' from **current record** in a carousel:

```
{{ carousel({ type: 'repeater',
              repeatername: 'myrepeater', 
              title: false, 
              title: 'repeattitle', 
              caption: 'repeatcontent', 
              start: 1,
              navigation: true, 
              indicators: true,
              slide: true,
              autoplay: false })
}}
```

b) Show 'myrepeater' from **custom record** i.e. 'showcase/10', adding `content:` option on top:

```
{{ carousel({ content: '/showcase/10', 
              type: 'repeater',
              repeatername: 'myrepeater', 
              title: 'repeattitle', 
              caption: 'repeatcontent', 
              start: 1,
              navigation: true, 
              indicators: true,
              slide: true,
              autoplay: false })
}}
```
