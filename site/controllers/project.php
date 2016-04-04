<?php

return function($site, $pages, $page) {

  $poster = $page->images()->filterBy('filename', '*=', 'poster')->first();
  $background = $page->images()->filterBy('filename', '*=', 'background')->first();
  $company = $page->images()->filterBy('filename', '*=', 'company');
  $festival = $page->images()->filterBy('filename', '*=', 'festival');

  return compact('poster', 'background', 'company', 'festival');

};