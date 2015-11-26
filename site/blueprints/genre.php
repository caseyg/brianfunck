<?php if(!defined('KIRBY')) exit ?>

title: Genre
pages: false
files:
  sortable: true
  fields:
    featured:
      label: Featured?
      type: toggle
      default: false
    title:
      label: Title
      type: text
    link:
      label: Link
      type: text
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  featured:
    label: Display featured works?
    type: toggle
    default: false