<?php

return function($site, $pages, $page) {

  $poster = $page->images()->filterBy('filename', '*=', 'poster')->first();
  $background = $page->images()->filterBy('filename', '*=', 'background')->first();
  $company = $page->images()->filterBy('filename', '*=', 'company')->first();
  $festival = $page->images()->filterBy('filename', '*=', 'festival')->first();

  return compact('poster', 'background', 'company', 'festival');

};
