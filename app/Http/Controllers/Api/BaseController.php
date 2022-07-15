<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    // success
    public function sendResponse($result, $message, $status = 200)
    {
        $response = [
            'data' => $result,
            'message' => $message
        ];

        return response()->json($response, $status);
    }

    // errors
    public function sendError($error, $errorMessages = [], $status = 404)
    {
        $response = [
            'message' => $error,
            'documentation' => 'https://docs.api.getpostman.com'
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        return response()->json($response, $status);
    }
}
