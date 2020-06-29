<?php

namespace App\Http\Controllers;

use App\Album;

class AlbumController extends Controller
{
    public function getListAlbumAvai()
    {
        $listAlbum = Album::getListAlbumAvai();
        $listResult = [];
        foreach ($listAlbum as $album) {
            $flag = 0;
            foreach ($listResult as $result) {
                if ($result->album_id == $album->album_id) {
                    $flag = 1;
                    break;
                }
            }
            if ($flag == 0) {
                array_push($listResult, $album);
            }
        }

        if (count($listResult) === 0) {
            return [
                "statusCode" => 500,
                "message" => "Empty"
            ];
        }

        return [
            "statusCode" => 200,
            "listAlbum" => $listResult,
        ];
    }
}
