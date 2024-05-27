<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {


        $url = 'https://aceh.tribunnews.com/tag/aceh-jaya';

        $html = file_get_contents($url);
        $pattern = '/<h3>(.*?)<\/h3>/s';
        preg_match_all($pattern, $html, $matches);
        $headings = $matches[1];
        $data['data'] = $headings;

        $url2 = 'https://aceh.tribunnews.com/tag/calang';
        $html2 = file_get_contents($url2);
        preg_match_all($pattern, $html2, $matches);
        $headings2 = $matches[1];
        $data['data2'] = $headings2;

        echo view('header');
        echo view('index', $data);
        echo view('footer');
    }
  
}
