<?php

function caidan(){
    $data1 =  '[
    
        {
            "description": "全部产品",
            "is_selected": false,
            "icon_url": "b918cf4f67e0e8223931cd595dc932fepng",
            "name": "全部",
            "grey_icon_url": "f8ddec5b7355581faa2bf4e24942dcc2png",
           
            "activity": null,
            "type": 3,
            "id": -2,
            "is_activity": null
        }
    ]';

    $arr = json_decode($data1,true);

    $food = ' [
                
        {
            "rating": 5,
            "is_featured": 0,
            "virtual_food_id": 547149914,
            "cold_box": null,
            "restaurant_id": 150135844,
            "pinyin_name": "weilayabo",
            "display_times": [],
            "attrs": [],
            "description": "666666666666",
            "month_sales": 19,
            "rating_count": 1,
            "tips": "1评价 月售19份",
            "image_path": "f87d9b3b3805bbeeb7ef08e644cbf891jpeg",
            "specifications": [],
            "server_utc": 1515241001,
            "is_essential": false,
            "attributes": [],
            "item_id": "147057128209",
            "min_purchase": 1,
            "limitation": {},
            "name": "微辣鸭脖555",
            "satisfy_count": 1,
            "activity": {
                "fixed_price": -1,
                "image_text_color": "f07373",
                "sum_condition": 0,
                "minimum_delivery_rule": 1,
                "quantity_text": "",
                "is_exclusive": 0,
                "applicable_quantity_text": "每单限1份优惠",
                "description": "贺岁之微辣鸭脖～high辣带回家",
                "max_quantity": 1,
                "quantity_condition": 1,
                "id": 267711042,
                "benefit_text": "5折",
                "applicable_quantity_text_color": "ff6c6c",
                "icon_color": "f07373",
                "discount": 0.5,
                "icon_name": "元",
                "must_super_vip": false,
                "name": "贺岁之微辣鸭脖～high辣带回家",
                "image_text": "5折，限1份",
                "applicable_quantity": 1,
                "is_promotion_toast_popup": true,
                "activity_type": "",
                "applicable_quantity_detail_text": "每单限1份优惠，超出的份数按原价计算",
                "is_price_changed": false
            },
            "satisfy_rate": 100,
            "specfoods": [
                {
                    "original_price": 22,
                    "sku_id": "169687082769",
                    "name": "微辣鸭脖（220g）",
                    "weight": 0,
                    "virtual_food_id": 547149914,
                    "pinyin_name": "weilayabo（220g）",
                    "restaurant_id": 150135844,
                    "food_id": 555983479,
                    "packing_fee": 0,
                    "recent_rating": 5,
                    "promotion_stock": 1000,
                    "price": 11,
                    "sold_out": false,
                    "recent_popularity": 19,
                    "is_essential": false,
                    "item_id": "147057128209",
                    "checkout_mode": 1,
                    "specs": [],
                    "partial_reduce_activity_id": null,
                    "stock": 9997
                }
            ],
            "category_id": 526669492
        }
    ]';

    $foodarr1 = json_decode($food,true);

    $foodarr2 = json_decode($food,true);

    $foodarr['foods'] = array_merge_recursive($foodarr1,$foodarr2);
    
    $json = json_encode($foodarr,JSON_UNESCAPED_UNICODE);
      
    $arr = json_encode($arr,JSON_UNESCAPED_UNICODE);
    
    return substr($arr, 0, -2).','.substr($json,1).']';
     
}






function restaurant($id,$promotion_info,$address,$name,$mobile,$description,$tip,$opening_hours){
    $res = '{
        "activities": [
        ],
        "address": "'.$address.'",
        
        "description": "'.$name.'",
        "distance": 0,
        "favored": false,
        "float_delivery_fee": 6,
        "float_minimum_order_amount": 5,
        "id": '.$id.',
        "image_path": "1",
        "is_new": false,
        "is_premium": true,
        "is_stock_empty": 0,
        "is_valid": 1,
        "latitude": 39.898515,
        "longitude": 116.419283,
        "max_applied_quantity_per_order": 1,
        "name": "'.$name.'",
        "next_business_time": "",
        "only_use_poi": false,
        "opening_hours": ["'.$opening_hours.'"],
        "order_lead_time": 20,
        "phone": "'.$mobile.'",
        "piecewise_agent_fee": {
            "description": "'.$description.'",
            "extra_fee": 1,
            "is_extra": true,
            "rules": [{
                "fee": 1.3,
                "price": 5
            }],
            "tips": "'.$tips.'"
        },
        "promotion_info": " '.$promotion_info.' ",
        "qualification": {
            "link": "",
            "safety_description": "甲级商家"
        },
        "rating": 4.8,
        "rating_count": 65,
        "recent_order_num": 129,
        "recommend": {
            "is_ad": false,
            "reason": ""
        },
        "regular_customer_count": 0,
        "scheme": "",
        "shop_sign": {
            "brand_story": "'.$name.'",
            "image_hash": "8590a16898ddb0e37f78685fb575f936png"
        },
        "status": 4,
        "supports": [{
            "description": "不支持开发票",
            "icon_color": "999999",
            "icon_name": "票",
            "id": 4,
            "name": "开发票"
        }],
        "type": 0,
        "weight": {
            "basic": 20000,
            "maximum": 20000,
            "unit": 20000,
            "unit_fee": 20000
        }
    }';

    return $res;
}