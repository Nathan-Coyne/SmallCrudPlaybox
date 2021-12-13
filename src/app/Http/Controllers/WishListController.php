<?php

namespace App\Http\Controllers;
use App\Module\WishList\Repository\Repository as WishRepo;
use App\Module\WishList\Model\WishList;
use Symfony\Component\HttpFoundation\Request;

class WishListController extends Controller
{
    public function createNewWishList(Request $request)
    {
        $wishList = new WishRepo(new WishList());
        $wishList->createWishList($request['name']);
    }

    public function getWishLists(){
        $wishList = new WishRepo(new WishList());
        return $wishList->getWishListWithoutProducts();
    }

    public function updateWishList(Request $request)
    {
        $wishList = new WishRepo(new WishList());
        $wishList->updateProduct($request['name'], $request['id']);
    }

    public function deleteWishList(Request $request)
    {
        $wishList =new WishRepo(new WishList());
        $wishList->deleteProduct($request['id']);
    }
}
