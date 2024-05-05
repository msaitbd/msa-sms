<?php


function getResponseMessage($e, $responseMsg = null)
{
    if (env('APP_DEBUG')) {
        return $e->getMessage() . ' ' . $e->getLine();
    } else {
        return $responseMsg;
    }
}

if (!function_exists('getLayout')) {
    function getLayout()
    {
        $output = [
            USER_TYPE_SUPER_ADMIN => 'super_admin',
            USER_TYPE_ADMIN => 'admin',
            USER_TYPE_TEACHER => 'teacher',
            USER_TYPE_STUDENT => 'student',
            USER_TYPE_PARENT => 'parent',
        ];

        return $output[auth()->user()->type];
    }
}
