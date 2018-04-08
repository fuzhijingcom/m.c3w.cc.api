<?php
namespace Restapi\Controller;
use Think\Controller;
class RestaurantController extends Controller {
    
	public function index(){
    	header("Content-type: text/html; charset=utf-8");
    	
    	$id = I('restaurant_id/d');
		
		if($id !== 1){
			$id = 1;
		}


		$info = M('sj')->where(array('id'=>$id))->find();
		$promotion_info = $info['pay_tip'];

		$address = M('school')->where(array('id'=>$info['mobile']))->getField('name');

		$name = $info['name'];
		$mobile = $info['mobile'];

		$description = "配送费1.5元";

		$opening_hours = "09:30/23:30";

		
		$res = restaurant($id,$promotion_info,$address,$name,$mobile,$description,$tip,$opening_hours);
    	
    	echo $res;

		
    	
    }
    
    
}