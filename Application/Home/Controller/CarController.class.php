<?php
/**
 * Created by PhpStorm.
 * User: xiaofeng
 * Date: 16/7/28
 * Time: 下午12:38
 */

namespace  Home\Controller;


use Think\Controller;

class CardController extends Controller{
    public function index(){

        $uri = 'http://www.cheshouye.com/api/weizhang/query_task?';



  // 参数数组
        $data = array (
            'hphm' => 'tanteng',  //
// 'password' => 'password'
        );

        $ch = curl_init ();
// print_r($ch);
        curl_setopt ( $ch, CURLOPT_URL, $uri );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
        $return = curl_exec ( $ch );
        curl_close ( $ch );

        print_r($return);
    }
}