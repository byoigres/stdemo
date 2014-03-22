<?php

/**
 * Descripción de Routes
 * 
 * @author Sergio Antonio Flores Angulo <byoigres@gmail.com>
 * @version 1.0, 19/03/2014, 05:15:33 PM
 */

return array(
    '/' => array(
        'method' => 'GET',
        'route' => 'home/index'
        ),
    '/user' => 'views/user',
    '/user/:id' => array(
        'view' => 'profile'
    )
);