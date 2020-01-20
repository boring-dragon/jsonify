<?php

namespace Jinas\Jsonify;

use Jinas\Jsonify\Response;
use Jinas\Jsonify\ResponseUtil;

class Util
{

    /**
     * sendResponse
     *
     * @param  mixed $result
     * @param  mixed $message
     *
     * @return void
     */
    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    /**
     * sendError
     *
     * @param  mixed $error
     * @param  mixed $code
     *
     * @return void
     */
    public function sendError($error, $message, $code = 404)
    {
        return Response::json(ResponseUtil::makeError($error, $message), $code);
    }
}
