<?php
namespace Pyntax\Reducer;

use Pyntax\Action\ActionInterface;
use Pyntax\Action\PayloadInterface;
use Pyntax\State\StateInterface;

/**
 * Interface ReducerInterface
 * @package Pyntax\Reducer
 */
interface ReducerInterface
{
    public function execute(StateInterface $stateInterface, ActionInterface $action);
}