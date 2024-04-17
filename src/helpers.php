<?php

namespace Collect;

function userCollection():Collect
{
    $users = [
        'admin' => 'admin',
        'user' => 'user'
    ];

    return new Collect($users);
}