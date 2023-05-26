<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetail;
use App\Models\OrderItem;
use App\Models\UserAddress;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function add_to_checkout(Request $request, $id){
        $user_address = UserAddress::where('user_id', Auth::user()->id)->first();
        $cek_checkout = OrderDetail::where('user_address_id', $user_address->user_id)->first();
        if(empty($cek_checkout))
    	{
    		$checkout_detail = new OrderDetail();
	    	$checkout_detail->user_id = Auth::user()->id;
	    	$checkout_detail->tanggal = $tanggal;
	    	$checkout_detail->status = 0;
	    	$checkout_detail->jumlah_harga = 0;
            $checkout_detail->kode = mt_rand(100, 999);
	    	$checkout_detail->save();
    	}
    }
}
