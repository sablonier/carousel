Carousel for Bolt CMS
=====================

Example configuration:

```
render:
    framework: foundation6
```
Options: foundation6, bootstrap4, swiper

####Example usage in templates


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

b) Show 'myrepeater' from 'showcase/10', adding the `content:` option):

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