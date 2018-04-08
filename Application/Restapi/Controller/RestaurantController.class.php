<?php
namespace Restapi\Controller;
use Think\Controller;
class RestaurantController extends Controller {
    
	public function index(){
    	header("Content-type: text/html; charset=utf-8");
    	
    	$id = I('restaurant_id/d');
		
		$res = M('sj_m_info')->where('id',$id)->find();
	
		if($res){
			echo $res['info'];
			exit;
		}

		if($id !== 1){

			$id = 1;

			// $url = "http://restapi.ele.me/shopping/restaurant/".$id."?extras[]=activities&extras[]=albums&extras[]=license&extras[]=identification&extras[]=qualification";
			// $ch = curl_init();
			// curl_setopt($ch, CURLOPT_URL, $url);
			// curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			// $out = curl_exec($ch);
			// curl_close($ch);
			// echo $out;
			// exit;
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