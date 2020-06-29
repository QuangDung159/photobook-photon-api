<?php

namespace App {
    class Constant
    {
        CONST TABLE_ADMIN = 'admin';
        CONST TABLE_COMMENT = 'comment';
        CONST TABLE_POST = 'post';
        CONST TABLE_USER = 'post';
        CONST TABLE_ALBUM = 'album';
        CONST TABLE_PHOTO = 'photo';
        CONST TABLE_SEEDING = 'seeding';
        CONST TABLE_LOG = 'log';
        CONST TABLE_ACCESSION = 'accession';

        CONST CONTROLLER_ALBUM = 'AlbumController@';
        CONST CONTROLLER_PHOTO = 'PhotoController@';
        CONST CONTROLLER_POST = 'PostController@';
        CONST CONTROLLER_MAIL = 'MailController@';
        CONST CONTROLLER_ACCESSION = 'AccessionController@';
        CONST CONTROLLER_ADMIN = 'AdminController@';

        CONST PATH_ADMIN_ALBUM = 'admin.pages.album.';
        CONST PATH_ADMIN_PHOTO = 'admin.pages.photo.';
        CONST PATH_ADMIN_NOTFOUND = 'admin.pages.404';

        CONST PATH_HOME = 'client.pages.home';
        CONST PATH_SINGLE = 'client.pages.single';
        CONST PATH_ABOUT = 'client.pages.about';

        CONST ACTION_LISTING = 'listing';
        CONST ACTION_DETAIL = 'detail';
        CONST ACTION_CREATE = 'create';
        CONST ACTION_MASS_UPLOAD = 'mass-upload';

        const DRIVE_CONFIG_URL = 'https://docs.google.com/uc?id=';

        CONST URL_ADMIN_ALBUM = '/admin-site/album/';
        CONST URL_ADMIN_PHOTO = '/admin-site/photo/';

        CONST PATH_TO_UPLOAD_PRODUCT_IMAGE = '/upload';
    }
}
