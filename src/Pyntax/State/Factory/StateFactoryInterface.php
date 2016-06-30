<?php
namespace Pyntax\Factory\State;

use Pyntax\Action\PayloadInterface;
use Pyntax\State\StateInterface;

/**
 * Class StateFactoryInterface
 * @package Pyntax\Factory\State
 */
interface StateFactoryInterface
{
    /**
     * @param StateInterface $stateInterface
     * @param PayloadInterface $payloadInterface
     *
     * @return StateInterface
     */
    public function updateState(StateInterface $stateInterface, PayloadInterface $payloadInterface);
}