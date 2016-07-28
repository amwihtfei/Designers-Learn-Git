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

        $news_title = $html->find('.new tl_ct .xst');
        $news_title = $news_title->getPlainText();

        $arr = [];
        foreach ($news_title as $key => $val) {
            $arr[$key]['title'] = $val;
        }

        $news_title = $html->find('.new tl_ct .xst');
        $news_href = $news_title->getAttr('href');
        foreach ($news_href as $key => $val) {
            $arr[$key]['url'] = $val;
        }

        $news_type = $html->find('.new tl_ct em a font');
        $news_type = $news_type->getPlainText();
        foreach ($news_type as $key => $val) {
            $arr[$key]['type'] = $val;
        }

        //时间
        $news_date = $html->find('.bt en span span');
        $news_date = $news_date->getAttr('title');
        foreach ($news_date as $key => $val) {
            $arr[$key]['date'] = $val;
        }


    }


    public function rules()
    {


    }
}