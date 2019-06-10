<?php

function navActive($name)
{
    return request()->routeIs($name) ? 'active' : '';
}