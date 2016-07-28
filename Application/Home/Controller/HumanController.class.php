<?php
namespace Home\Controller;

use Think\Controller;
use Vendor\Spider\Htmldom;

class HumanController extends Controller
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

        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();

        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();

        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();

        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();


        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();


        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();


        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();


        $job_name=$html->find('.jycomv4227 ul li strong a');
        $job_name=$job_name->getPlainText();

    }



    public function rules()
    {


    }
}