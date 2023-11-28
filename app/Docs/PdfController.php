<?php

namespace App\Docs;

class PdfController
{
    /**
     *
     * @OA\Post(
     *     path="/pdf/generate-from-html",
     *     tags={"PDF"},
     *     operationId="generate_from_html",
     *     summary="Generate pdf from html. Return a pdf stream",
     *     @OA\Parameter(
     *          name="html",
     *          in="query",
     *          description="HTML to generate",
     *          @OA\Schema(
     *              type="string",
     *              example="<h1>Hello<h1>"
     *          )
     *     ),
     *     @OA\Response(
     *          response="200",
     *          description="Success"
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