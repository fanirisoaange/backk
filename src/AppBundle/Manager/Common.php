<?php

namespace AppBundle\Manager;


use AppBundle\Donnees\ResponseDTO;

class Common
{
    protected function get404Msg(string $msg = '')
    {
        return ResponseDTO::getNotFoundResponse($msg);
    }

    protected function getBadRequestResponse(string $message)
    {
        return ResponseDTO::getBadRequestResponse($message);
    }

    public function getErrorMsg(string $errorMsg  = '', $errors = [])
    {
        return ResponseDTO::getErrorResponse($errorMsg, $errors);
    }

    public function getFieldErrorMsg(string $errorMsg  = '', $errors = [], $data = null)
    {
        return ResponseDTO::getFieldErrorResponse($errorMsg, $errors, $data);
    }

    protected function getSuccessMsg($msg, $data = NULL)
    {
        return ResponseDTO::getSuccessResponse($msg, $data);
    }

    protected function getErrorJsonFormat($msg)
    {
        return ResponseDTO::getErrorResponse($msg);
    }

    protected function getNotFoundMsg(string $errorMsg = 'NOT FOUND')
    {
        return ResponseDTO::getNotFoundResponse($errorMsg);
    }


    protected function checkJson($data)
    {
        return is_object($data);
    }

    protected function getAccessForbidden(string $message = 'Access Denied. (403 Forbidden)')
    {
        return ResponseDTO::getForbiddenResponse($message);
    }
}