Carousel for Bolt CMS
=====================

Example configuration:

render:
    framework: foundation6

Example usage:

{{ carousel({ content: '/showcase/10', 
              type: 'repeater',
              repeatername: 'myrepeater', 
              title: 'repeattitle', 
              caption: 'repeatcontent', 
              start: 1,
              navigation: true, 
              indicators: true,
              slide: true 
            })
}}