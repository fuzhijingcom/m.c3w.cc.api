<?php
namespace Restapi\Controller;
use Think\Controller;

class ShoppingController extends Controller {
	/**
	 * 商品详情
	 */
    public function v2(){
    	header("Content-type: text/html; charset=utf-8");
    	$menu= I('menu');
        $restaurant_id = I('restaurant_id');
        
        
        $url="https://restapi.ele.me/shopping/v2/menu?restaurant_id=".$restaurant_id;
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	$out = curl_exec($ch);
        curl_close($ch);
        
        echo $out;
    	
    }
    
    
    
}