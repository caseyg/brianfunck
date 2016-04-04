<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: text
  link-film:
    label: "Watch Film" Link
    type: url
    width: 1/3
  link-clip:
    label: "Watch Clip" Link
    type: url
    width: 1/3
  link-trailer:
    label: "Watch Trailer" Link
    type: url
    width: 1/3
  reviews: 
    label: Reviews
    type: markdown
  synopsis:
    label: Synopsis
    type: textarea
  credits:
    label: Credits
    type: textarea