<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CacheKeyEnum;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [

    ];

    // *****************************************
    // - APCu (alternative PHP cache Userland): Cache du lieu truc tiep tren ram cua sever
    // APCu hoat dong tot cho mot may chu don le
    // - Redis && Memcached: cache ben ngoai, cung cap kha nang luu tru va truy xuat du lieu
    // nhanh chong. Cho phep share giua cac phien lam viec va nguoi dung khac nhau.
    // *****************************************
    // Redis
    public static function getAndCacheByKey($key): string
    {
        return cache()->remember(
            CacheKeyEnum::CONFIG . $key,
            CacheKeyEnum::ONE_MONTH,
            function () use ($key) {
                return self::query()
                    ->where('key', $key)
                    ->value('value');
            }
        );
    }

    private static array $caches = [];

    public static function getAndCacheByKeyToJson($key)
    {
        //  trong 1 request call nhieu thi nen dung cach nay, con khong thi chi can redis thoi
        // if (isset(self::$caches[$key])) {
        //     return self::$caches[$key];
        // }

        $json = cache()->remember(
            CacheKeyEnum::CONFIG . $key,
            CacheKeyEnum::ONE_MONTH,
            function () use ($key) {
                return self::query()
                    ->where('key', $key)
                    ->first()
                    // Error if not found, so in PHP 8.0 should add `?`
                    // ?->toJson();
                    // But in lower version, should check exist before use toJson.
                    ->toJson();
            }
        );
        // Like object
        $data = json_decode($json, false);
        // Like array
        // return json_decode($json, true);

        // self::$caches[$key] = $data;
        return $data;
    }

    // Sample cache static variable
    public function getCacheData()
    {
        static $cache = null;

        // Check if data is already cached
        if ($cache !== null) {
            return $cache;
        }

        // Perform expensive operation
        $expensiveData = $this->computeExpensiveData();

        // Cache the data
        $cache = $expensiveData;

        return $cache;
    }

    public function computeExpensiveData()
    {
        // In real scenarios, this could be a database query, API call, etc
        sleep(1);
        return 'Expensive Data';
    }

    // Usage
    // $data1 = getCacheData() This will compute and cache
    // $data2 = getCacheData() This will use the cache value
}
