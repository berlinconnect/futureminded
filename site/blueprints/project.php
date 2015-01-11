<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: text
  identifier:
    label: Unique ID
    type:  text
  name:
    label: Project Name
    type:  text
  intro:
    label: Intro Text
    type:  textarea
  text:
    label: Text
    type:  textarea
  button:
    label: Link
    type:  text