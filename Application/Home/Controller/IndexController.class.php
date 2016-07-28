<?php
namespace Home\Controller;

use Think\Controller;
use Vendor\Spider\Htmldom;

class IndexController extends Controller
{
    public function index()
    {
//        $html=file_get_contents('http://liuyangshi.cn/jiaoyu/');
        $html=file_get_contents('http://www.baidu.com');
        dump($html);


        $html=new Htmldom($html);
        dump($html->find('#wrapper'));
    }
}