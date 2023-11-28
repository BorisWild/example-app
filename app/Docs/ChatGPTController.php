<?php

namespace App\Docs;

class ChatGPTController
{
    /**
     *
     * @OA\Get(
     *     path="/chatgpt/get-message-by-prompt",
     *     tags={"ChatGPT"},
     *     operationId="get_message_by_prompt",
     *     summary="Get answer from ChatGPT without context",
     *     @OA\Parameter(
     *          name="prompt",
     *          in="query",
     *          description="Message to ChatGPT",
     *          @OA\Schema(
     *              type="string",
     *              example="Hello"
     *          )
     *     ),
     *     @OA\Response(
     *          response="200",
     *          description="Success",
     *          @OA\MediaType(
     *             mediaType="application/json",
     *              @OA\Schema(
     *                @OA\Property(property="answer", type="string", example="Hello!"),
     *             ),
     *         )
     *     ),
     *     @OA\Response(
     *          response="404",
     *          ref="#/components/responses/404"
     *      ),
     *      @OA\Response(
     *          response="403",
     *          ref="#/components/responses/403"
     *      ),
     *      @OA\Response(
     *          response="422",
     *          ref="#/components/responses/422"
     *      ),
     *     @OA\Response(
     *          response="401",
     *          ref="#/components/responses/401"
     *      ),
     * )
     */
    public function getMain()
    {

    }
}