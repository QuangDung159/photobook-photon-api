<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Photo extends Model
{
    public static function getAllPhotoByAvaiByAlbum($albumId)
    {
        $albumId = intval($albumId);
        return DB::table(Constant::TABLE_PHOTO)
            ->where(
                Constant::TABLE_PHOTO . '.photo_status',
                '=',
                1
            )
            ->where(
                Constant::TABLE_PHOTO . '.photo_is_deleted',
                '=',
                0
            )
            ->where(
                Constant::TABLE_PHOTO . '.album_id',
                '=',
                $albumId
            )
            ->get();
    }
}
