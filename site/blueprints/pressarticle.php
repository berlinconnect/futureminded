<?php if(!defined('KIRBY')) exit ?>

title: Press Article
pages: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
  author:
    label: Author
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large