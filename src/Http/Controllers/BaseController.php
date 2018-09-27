<?php

namespace Cendekia\SettingTool\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseController
{
    /**
     * Response messages.
     *
     * @var array
     */
    protected $message = [];

    /**
     * Response setting
     * @var string
     */
    protected $setting;

    /**
     * Response status
     * @var string
     */
    protected $statusCode = 200;

    /**
     * Undocumented function.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function run(Request $request): JsonResponse
    {
        $this->process($request);

        return response()->json([
            'message' => $this->message,
            'setting' => $this->setting
        ], $this->statusCode);
    }
}
