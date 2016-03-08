<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type: text
  link:
    label: Watch Trailer Link
    type: url
  reviews: 
    label: Reviews
    type: markdown
  synopsis:
    label: Synopsis
    type: textarea
  credits:
    label: Credits
    type: textarea