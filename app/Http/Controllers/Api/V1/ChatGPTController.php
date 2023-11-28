<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChatGPT\ChatPromptRequest;
use App\Services\ChatGPT\ChatGPTClient;

class ChatGPTController extends Controller
{
    public function getMessageByPrompt(ChatPromptRequest $request)
    {
        $client = new ChatGPTClient();
        return response()->json([
            'answer' => $client->getChat($request->prompt)
        ]);
    }
}
