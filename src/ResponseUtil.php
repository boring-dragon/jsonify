<?php

namespace Jinas\Jsonify;


class ResponseUtil
{
    /**
     * makeResponse
     *
     * @param  mixed $message
     * @param  mixed $data
     *
     * @return void
     */
    public static function makeResponse($message, $data)
    {
        return [
            'success' => true,
            'data'    => $data,
            'message' => $message
        ];
    }

    public static function makeError(array $data = [], $message)
    {
        $res = [
            'success' => false,
            'data' => $data,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}
