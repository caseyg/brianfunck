<?php

return function($site, $pages, $page) {

  $poster = $page->images()->filterBy('filename', '*=', 'poster')->first();
  $background = $page->images()->filterBy('filename', '*=', 'background')->first();
  $logos = $page->images()->filterBy('filename', '*=', 'logo')->sortBy('sort', 'asc');

  return compact('poster', 'background', 'logos');

};