<?php
namespace Api\Controller;
use Think\Controller;
class ShoppingController extends Controller {

    public function v2(){
    	header("Content-type: text/html; charset=utf-8");
    	$menu= I('menu');
        $restaurant_id = I('restaurant_id');
        
        $res = caidan($restaurant_id);
        
        echo $res;
    	
    }
    	
    	
    	
}
    
    
    
