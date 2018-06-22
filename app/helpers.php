<?php

function localeLink($str) {
    return '/'.app()->getLocale().$str;
}
function adminLocaleLink($str) {
    return '/'.app()->getLocale().'/admin-panel'.$str;
}
