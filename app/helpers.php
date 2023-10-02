<?php

use App\Rules\CheckBadWordText;
use App\Models\TagMultiLink;
use App\Enums\SystemCacheKeyEnum;

if (!function_exists('getAndCacheBadWordList')) {
    function getAndCacheBadWordList()
    {
        return cache()->remember(
            'bad_word_list',
            86400 * 30,
            function () {
                $list = CheckBadWordText::validate('en');
                return collect(explode("\n", $list));
            }
        );
    }
}

// if(!function_exists('ArrayChildLinks')){
//     function ArrayChildLinks($tagId): array
//     {
//         $tags = TagMultiLink::with('children')->where('id', $tagId)->get()->map(function ($tag) {
//             $children = $tag->childArray();
//             unset($tag->children);
//             $tag->children = $children;
//             return $tag->children;
//         });
//         return $tags->toArray();
//     }

// }

/**
 * Get all link in tag by tag_id
 * Cache data links
 *
 * @return mixed $links
 */
if(!function_exists('getLinkTag')){
    function getLinkTag($userId)
    {
        return cache()->remember(
            SystemCacheKeyEnum::TAG_MULTI_LINK,
            86400 * 30,
            function () use($userId) {
                $links = TagMultiLink::whereNull('parent_tag_id')->whereUserId($userId)
                            ->with('children')
                            ->get();
                return $links;
            }
        );
    }

}
