<?php
    return [
        App\Core\Route::get('|^category/([0-9]+)/?$|', 'Category', 'show'),
        App\Core\Route::get('|^category/([0-9]+)/delete/?$|', 'Category', 'delete'),

        App\Core\Route::get('|^auction/([0-9]+)/?$|', 'Auction', 'show'),

        # API rute:
        App\Core\Route::get('|^api/auction/([0-9]+)/?$|', 'ApiAuction', 'show'),
        App\Core\Route::get('|^api/bookmarks/?$|', 'ApiBookmark', 'getBookmarks'),
        App\Core\Route::get('|^api/bookmarks/add/([0-9]+)/?$|', 'ApiBookmark', 'addBookmark'),
        App\Core\Route::get('|^api/bookmarks/clear/?$|', 'ApiBookmark', 'clear'),

        App\Core\Route::any('|^.*$|', 'Main', 'home')
    ];

