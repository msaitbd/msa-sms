<?php


function getResponseMessage($e, $responseMsg = null)
{
    if (env('APP_DEBUG')) {
        return $e->getMessage() . ' ' . $e->getLine();
    } else {
        return $responseMsg;
    }
}
