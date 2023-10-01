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
     * Get multi links of a tag.
     */
    public function getMultiLinks($tagId)
    {
        if (!auth()->user()->id || !$tagId) {
            return $this->errorResponse("NoExecuteFunction!");
        }
        //
        $links = TagMultiLink::getLinksByTagId(auth()->user()->id, $tagId);
        if (!$links) {
            // If tag don't have any links and u don't want to return the results
            // Use $links->isEmpty() instead of this condition
            return $this->errorResponse("NoExecuteFunction!");
        }

        return $this->successResponse($links->toArray());
    }

}
