<?php
function doFoo()
{
    foreach ([
                 CacheApcu::class,
                 CacheMemcached::class,
             ] as $backend) {
        $cache = new $backend();
    }

}