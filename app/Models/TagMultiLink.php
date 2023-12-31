<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagMultiLink extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'tags_multi_link';

    protected $fillable = [
        'id',
        'name',
        'sub_name',
        'link',
        'parent_tag_id',
    ];

    /**
     * Relationship with multi level.
     *
     * @return $this
     */
    public function children()
    {
        return $this->hasMany(TagMultiLink::class, 'parent_tag_id');
    }

     /**
     * Get all tags by user id.
     *
     * @return static
     */
    static function allTags($userId)
    {
        return static::whereUserId($userId)
                ->whereNull('parent_tag_id')
                ->get();
    }

    /**
     * Count total number of links in a tag.
     *
     * @return int total number of links in a tag
     */
    public function countTag($tagId)
    {
        return TagMultiLink::where('parent_tag_id', $tagId)->count();
    }

    /**
     * Hàm này siu hịn, tạo data của relationship với chính nó rồi return array.
     *
     * @param static $model
     * @return array
     */
    public function childArray($model = null)
    {
        $model = $model ?? $this;

        $result = [];

        if ($model !== $this) {
            array_push($result, $model->id);
        }

        $childs = $model->children;
        if ($childs->isNotEmpty()) {
            foreach ($childs as $value) {
                $result = array_merge($result, $this->childArray($value));
            }
        }

        return $result;
    }

    /**
     * Get information of tag
     *
     * @return static
     */
    static function getTags($userId, $tagId)
    {
        return static::whereUserId($userId)->whereId($tagId)->first();
    }

    /**
     * Get all links by tag id & user id
     *
     * @param int $userId
     * @param int $tagId
     * @return static
     */
    static function getLinksByTagId($userId, $tagId)
    {
        return static::whereUserId($userId)->where('parent_tag_id', $tagId)->get('link');
    }

    /**
     * Delete a tag and all link of tag.
     *
     * @param int $userId
     * @param int $tagId
     * @return static
     */
    static function deleteTags($userId, $tagId)
    {
        return static::whereUserId($userId)
                ->whereId($tagId)
                ->whereNull('parent_tag_id')
                ->orWhere('parent_tag_id', $tagId)
                ->delete();
    }

    // // asdda/*  */
}
