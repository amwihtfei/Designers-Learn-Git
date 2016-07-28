<?php
namespace Home\Controller;

use Think\Controller;
use Vendor\Spider\Htmldom;

class BbsController extends Controller
{
    public function index()
    {
        $category=1;
        $page=1;
        $url = ['http://bbs.lyrb.com.cn/forum-'.$category.'-' . $page];

        $this->getOne($url);
    }

    public function getOne($url)
    {
        $html = file_get_contents($url);
        $html = new Htmldom($html);
        dump($html);

        $news_title=$html->find('.new tl_ct .xst');
        $news_title=$news_title->getPlainText();

        $arr=[];
        foreach($news_title as $key=>$val){
            $arr[$key]['title']=$val;
        }

        $news_title=$html->find('.new tl_ct .xst');
        $news_href=$news_title->getAttr('href');
        foreach($news_href as $key=>$val){
            $arr[$key]['url']=$val;
        }

        $news_type=$html->find('.new tl_ct em a font');
        $news_type=$news_type->getPlainText();
        foreach($news_type as $key=>$val){
            $arr[$key]['type']=$val;
        }

        //时间



//        $info=$html->find('.jycomv4227 ul li');
//
//        for($i=0;$i<count($info);$i++){
//            if($i>0 && $i<=count($info)-2){
//                $temp=$job_name->getPlainText();
//                //doing:汇总到数组中,并写入数据库中
//                if(strstr($temp,'职位类型：')){
//
//                }elseif(strstr($temp,'性别要求：')){
//
//                }elseif(strstr($temp,'性别要求：')){
//
//                }elseif(strstr($temp,'招聘人数：')){
//
//                }elseif(strstr($temp,'薪资待遇：')){
//
//                }elseif(strstr($temp,'工作地区：')){
//
//                }elseif(strstr($temp,'学历要求：')){
//
//                }elseif(strstr($temp,'工作经验：')){
//
//                }elseif(strstr($temp,'年龄要求：')){
//
//                }elseif(strstr($temp,'发布时间：')){
//
//                }elseif(strstr($temp,'截止时间：')){
//
//                }
//                //doing:这里还需要公司地址,联系电话等信息
//            }
//        }
    }



    public function rules()
    {


    }
}