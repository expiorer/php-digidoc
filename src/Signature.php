<?php

/*
 * This file is part of the DigiDoc package.
 *
 * (c) Kristen Gilden <kristen.gilden@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KG\DigiDoc;

class Signature
{
    /**
     * @var Api
     */
    private $api;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $challenge;

    /**
     * @param Api    $api
     * @param string $id        Signature id
     * @param string $challenge A solvable challenge to seal this signature
     */
    public function __construct(Api $api, $id, $challenge)
    {
        $this->api = $api;
        $this->id = $id;
        $this->challenge = $challenge;
    }

    /**
     * Gets the signature id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getChallenge()
    {
        return $this->challenge;
    }
}
