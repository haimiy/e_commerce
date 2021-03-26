<?php
namespace App\Helper;
use App\Models\Cart;
class HelperFunctions
{
    public static function getUserTotalCartProducts($user_id)
    {
    	return Cart::where('user_id',$user_id)->count();	
    }
}
