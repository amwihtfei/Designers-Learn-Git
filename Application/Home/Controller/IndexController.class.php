<?php
namespace Home\Controller;

use Think\Controller;
use Vendor\Spider\Htmldom;

class IndexController extends Controller
{
    public function index()
    {
        $url=['http://www.hnz.com.cn/'];
        foreach($url as $val){
            $this->getOne($val);
        }
    }
    
    public function getOne($url){
        $html=file_get_contents($url);
        $html=new Htmldom($html);
        dump($html->find('#wrapper'));
    }


    public function test(){

    $url='http://www.hnz.com.cn/person/showinfo.aspx?jobid=201607280916330';
        $html=file_get_contents($url);
        dump($html);
    }
    
    
    public function rules(){
    
    
    }
}