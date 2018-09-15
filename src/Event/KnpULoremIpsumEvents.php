<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 15/09/2018
 * Time: 10:47 PM
 */

namespace KnpU\LoremIpsumBundle\Event;


final class KnpULoremIpsumEvents
{
    /**
     * Called directly before the lorem Ipsum API data is returned.
     *
     * Listeners have the opportunity to change that data.
     *
     * @Event("KnpU\LoremIpsumBundle\Event\FilterApiResponseEvent")
     */
    const FILTER_API = 'knpu_lorem_ipsum.filter_api';
}