<?php
namespace Home\Controller;

use Think\Controller;
use Vendor\Spider\Htmldom;

class BbsController extends Controller
{
    public function index()
    {
        $job_id = 67098;
//        $url = ['http://www.liuyangjob.com/Company_Index.asp?hygjc=&Position_b=&Position_s=&Qualification=&Province=&City=&County=&ValidityDate=&keyword=&page=' . $count];
        $url = ['http://www.liuyangjob.com/job/job.asp?JobId=' . $job_id];

        $this->getOne($url);
    }

    public function getOne($url)
    {
        $html = file_get_contents($url);
        $html = new Htmldom($html);
        dump($html);


        $company_name=$html->find('.jycomv221 strong');
        $company_name=$company_name->getPlainText();

        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();

        $info=$html->find('.jycomv4227 ul li');

        for($i=0;$i<count($info);$i++){
            if($i>0 && $i<=count($info)-2){
                $temp=$job_name->getPlainText();
                //doing:汇总到数组中,并写入数据库中
                if(strstr($temp,'职位类型：')){

                }elseif(strstr($temp,'性别要求：')){

                }elseif(strstr($temp,'性别要求：')){

                }elseif(strstr($temp,'招聘人数：')){

                }elseif(strstr($temp,'薪资待遇：')){

                }elseif(strstr($temp,'工作地区：')){

                }elseif(strstr($temp,'学历要求：')){

                }elseif(strstr($temp,'工作经验：')){

                }elseif(strstr($temp,'年龄要求：')){

                }elseif(strstr($temp,'发布时间：')){

                }elseif(strstr($temp,'截止时间：')){

                }
                //doing:这里还需要公司地址,联系电话等信息
            }
        }
    }



    public function rules()
    {


    }
}