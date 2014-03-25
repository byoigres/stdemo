<?php

/**
 * Descripción de Stonetooth
 * 
 * @author Sergio Antonio Flores Angulo <byoigres@gmail.com>
 * @version 1.0, 19/03/2014, 03:49:41 PM
 */

require_once '../stonetooth/Stonetooth.php';

$st = new Stonetooth();

$st->init(require_once 'config/Application.php');