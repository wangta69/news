<?php
namespace Pondol\News;
use Pondol\Curl\CurlService;

//refer : https://developers.naver.com/docs/search/news/
class NaverService{

    /**
     * 네이버 뉴스를 가져온다.
     * @param $body Array array(query, display, start, sort)
     * @param $foramt String json/xml
     */
    public function getNews($body, $format='json'){
        $api_url = 'https://openapi.naver.com/v1/search/news.'.$format;
        
        $curl = new CurlService();
        
        $params['body'] = $body;

        $params['headers'][] = 'X-Naver-Client-Id: '.config('services.naver.client_id');
        $params['headers'][] = 'X-Naver-Client-Secret: '.config('services.naver.client_secret');
        
        $curl->request('GET', $api_url, $params);//
        
        if($curl->http_code() != 200){
            $message = $this->err_message($curl->http_code());
            echo $message;
            return false;
        }
        return json_decode($curl->body());
    }
    
    
    private function err_message($err_code){
        return "Incorrect query request";
    }
}