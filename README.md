Carousel for Bolt CMS
=====================

Example configuration:

```
render:
    framework: foundation6
```
Options: foundation6, bootstrap4, swiper

Example usage in templates:

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
                    autoplay: false
                 })
}}
```
