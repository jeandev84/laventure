<?php

return [

    /*
    |------------------------------------------------------------------
    |   Configurations
    |------------------------------------------------------------------
    */
    'event' => [
        'dir'    => 'app/Event',
        'prefix' => "App\\Event"
    ],
    'subscribers' => [
        'dir'    => 'app/EventSubscriber',
        'prefix' => "App\\EventSubscriber"
    ],
    'listeners' => [
        'dir'    => 'app/EventListener',
        'prefix' => "App\\EventListener"
    ]
];