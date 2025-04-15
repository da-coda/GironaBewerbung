<?php

declare(strict_types=1);
namespace Entity;

enum Module: string {
    case OTA = 'ota';
    case AUFRUFANLAGE = 'aufrufanlag';
    case EVENTS = 'events';
}