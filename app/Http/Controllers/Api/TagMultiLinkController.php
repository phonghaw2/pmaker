<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Models\TagMultiLink;
use Illuminate\Http\Request;

class TagMultiLinkController extends Controller
{
    use ResponseTrait;

    /**
     * Get the "after" validation callables for the request.
     */
    public function getMultiLinks($tagId)
    {
        if (!auth()->user()->id || !$tagId) {
            return $this->errorResponse("NoExecuteFunction!");
        }
        //
        $links = TagMultiLink::getLinksByTagId(auth()->user()->id, $tagId);
        if (!$links) {
            return $this->errorResponse("NoExecuteFunction!");
        }

        return $this->successResponse($links->toArray());
    }

}
