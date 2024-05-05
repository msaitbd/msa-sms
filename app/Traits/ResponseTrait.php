<?php

namespace App\Traits;


trait ResponseTrait
{
    public $success = 200;
    public $error = 500;
    public $response = ['status' => false, 'data' => [], 'message' => ''];

    public function success($data = [], $message = null)
    {
        $this->response['status'] = true;
        $this->response['data'] = $data;
        $this->response['message'] = $message;
        return response()->json($this->response, $this->success);
    }

    public function error($data = [], $message = null)
    {
        $this->response['data'] = $data;
        $this->response['message'] = $message;
        return response()->json($this->response, $this->error);
    }
}
