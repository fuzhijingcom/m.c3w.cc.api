<?php
namespace Restapi\Controller;
use Think\Controller;
class UgcController extends Controller {
	/**
	 * 评价
	 */
    public function v2(){
      
    	$restaurants = I('restaurants');
    	$ratings = I('ratings');

    	header("Content-type: text/html; charset=utf-8");
    	//has_content=true&tag_name=全部&offset=00&limit=10
    	
    	$has_content = urlencode($_GET['has_content']);
    	$tag_name = urlencode($_GET['tag_name']);
    	$offset = urlencode($_GET['offset']);
    	$limit = urlencode($_GET['limit']);
		
		
		$url="https://restapi.ele.me/ugc/v2/restaurants/".$restaurants."/ratings?has_content=".$has_content."&tag_name=".$tag_name."&offset=".$offset."&limit=".$limit;
		
		
		$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    	$out = curl_exec($ch);
        curl_close($ch);
        
        echo $out;
    	
    }
}