<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
files:
  sortable: true
  fields:
    title:
      label: Title
      type: text
    length:
      label: Clip Length
      type: text
    vimeo:
      label: Trailer Vimeo ID
      type: text
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large