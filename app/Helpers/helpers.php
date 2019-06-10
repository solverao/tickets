<?php

function navActive($name)
{
    return request()->routeIs($name) ? 'active' : '';
}

function valStatus($name)
{
    if($name == 'PENDIENTE')
    {
        return 'label label-primary';
    }
    elseif ($name == 'SUSPENDIDO')
    {
        return 'label label-warning';
    }
    elseif ($name == 'FALLIDO')
    {
        return 'label label-danger';
    }
    elseif ($name == 'EXITOSO')
    {
        return 'label label-success';
    }
    elseif ($name == 'CERRADO')
    {
        return 'label label-info';
    }
    else
    {
        return 'label label-default';
    }
}
