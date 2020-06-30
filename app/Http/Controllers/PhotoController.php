<?php

namespace App\Http\Controllers;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function getAllPhotoByAvaiByAlbum(Request $req)
    {
        $albumId = $req->albumId;
        $album = Album::getAlbumById($albumId);
        if (empty($album)) {
            return [
                'statusCode' => 500,
                'message' => 'Album not found',
            ];
        }
        $listPhoto = Photo::getAllPhotoByAvaiByAlbum($album->album_id);
        if (count($listPhoto) === 0) {
            return [
                'statusCode' => 500,
                'message' => 'Empty',
            ];
        } else {
            return [
                'statusCode' => 200,
                'listPhoto' => $listPhoto,
                'album' => $album,
            ];
        }
    }
}
