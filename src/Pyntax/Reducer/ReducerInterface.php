<?php
namespace Pyntax\Reducer;

use Pyntax\Action\ActionInterface;
use Pyntax\Action\PayloadInterface;

/**
 * Interface ReducerInterface
 * @package Pyntax\Reducer
 */
interface ReducerInterface
{
    /**
     * @param ActionInterface $action
     * @param PayloadInterface $payload
     * 
     * @return mixed
     */
    public function execute(ActionInterface $action, PayloadInterface $payload);
}