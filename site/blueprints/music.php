<?php if(!defined('KIRBY')) exit ?>

title: Genre
pages: false
files:
  sortable: true
  fields:
    title:
      label: Title
      type: text
    label:
      label: Label
      type: text
    link:
      label: Web Link
      type: text
    spotify:
      label: Spotify Link
      type: text
    itunes:
      label: iTunes Link
      type: text
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  reviews:
    label: Reviews
    type:  textarea