<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 15/09/2018
 * Time: 8:50 AM
 */

namespace KnpU\LoremIpsumBundle;


interface WordProviderInterface
{
    /**
     * Returns an array of words to use for fake text.
     *
     * @return array
     */
    public function getWordList(): array;

}