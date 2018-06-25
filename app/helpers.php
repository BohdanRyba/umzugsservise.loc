<?php

function localeLink($str)
{
    return '/' . app()->getLocale() . $str;
}

function adminLocaleLink($str)
{
    return '/' . app()->getLocale() . '/admin-panel' . $str;
}

function getImgUrl($imgPath)
{
    return 'http://umzugsservise.loc/public' . $imgPath;
}
