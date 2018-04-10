<?php
/**
 * Copyright © 2018 Rubic. All rights reserved.
 * See LICENSE.txt for license details.
 */
use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Rubic_CleanCheckoutGeo',
    __DIR__ . '/src'
);

ComponentRegistrar::register(
    ComponentRegistrar::LIBRARY,
    'GeoIp2',
    __DIR__ . '/../../../vendor/geoip2/geoip2/src'
);
