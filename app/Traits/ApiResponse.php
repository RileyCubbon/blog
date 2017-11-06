<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/11/4
 * Time: 22:12
 */

namespace App\Traits;


trait ApiResponse
{
    protected $success_code = 200;
    protected $failed_code  = 500;

    public function sendSuccessResponse ( $message = null, $data = null, $status = null )
    {
        $status   = is_null($status) ? $this->success_code : $status;
        $response = [
            'message' => $message,
            'data'    => $data,
        ];
        if ( is_null($data) ) unset($response[ 'data' ]);

        return response()->json($response, $status);
    }

    public function sendFailedResponse ( $message = null, $errors = null, $status = null )
    {
        $status   = is_null($status) ? $this->failed_code : $status;
        $response = [
            'message' => $message,
            'errors'  => $errors,
        ];
        if ( is_null($errors) ) unset($response[ 'errors' ]);

        return response()->json($response, $status);
    }
}