<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 15/09/2018
 * Time: 10:27 PM
 */

namespace KnpU\LoremIpsumBundle\Event;


use Symfony\Component\EventDispatcher\Event;

class FilterApiResponseEvent extends Event
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }



}