<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Album extends Model
{
    public static function getListAlbumAvai()
    {
        return DB::table(Constant::TABLE_ALBUM)
            ->select(
                Constant::TABLE_POST . '.post_panel_image',
                Constant::TABLE_ALBUM . '.*',
            )
            ->join(
                Constant::TABLE_POST,
                Constant::TABLE_ALBUM . '.album_id',
                '=',
                Constant::TABLE_POST . '.album_id'
            )
            ->where(
                Constant::TABLE_ALBUM . '.album_status',
                '=',
                1
            )
            ->where(
                Constant::TABLE_ALBUM . '.album_is_deleted',
                '=',
                0
            )
            ->orderBy(
                Constant::TABLE_ALBUM . '.album_created_at',
                "desc"
            )
            ->get();
    }

    public static function getAlbumById($albumId)
    {
        $albumId = intval($albumId);
        return DB::table(Constant::TABLE_ALBUM)
            ->where(
                Constant::TABLE_ALBUM . '.album_id',
                '=',
                $albumId
            )
            ->where(
                Constant::TABLE_ALBUM . '.album_is_deleted',
                '=',
                0
            )
            ->where(
                Constant::TABLE_ALBUM . '.album_status',
                '=',
                1
            )
            ->first();
    }
}
