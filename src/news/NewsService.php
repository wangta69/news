<?php
namespace Pondol\News;

/**
 * 
 */
class NewsService{
    protected $publisher = [
        'ajunews.com'=>['name'=>'아주경제']
        , 'asiae.co.kr'=>['name'=>'아시아경제']
        , 'asiatime.co.kr'=>['name'=>'아시아타임즈']
        , 'asiatoday.co.kr'=>['name'=>'아시아투데이']
        , 'businesspost.co.kr'=>['name'=>'비즈니스포스트']
        , 'chosun.com'=>['name'=>'조선일보']
        , 'dailian.co.kr'=>['name'=>'데일리안']
        , 'ddaily.co.kr'=>['name'=>'디지털데일리']
        , 'donga.com'=>['name'=>'동아닷컴']
        , 'dt.co.kr'=>['name'=>'디지털타임스']
        , 'ebn.co.kr'=>['name'=>'EBN']
        , 'economytalk.kr'=>['name'=>'economytalk']
        , 'econonews.co.kr'=>['name'=>'이코노뉴스']
        , 'edaily.co.kr'=>['name'=>'이데일리']
        , 'einfomax.co.kr'=>['name'=>'연합인포맥스']
        , 'www.ekn.kr'=>['name'=>'에너지경제']
        , 'enewstoday.co.kr'=>['name'=>'이뉴스투데이']
        , 'etnews.com'=>['name'=>'전자신문']
        , 'etoday.co.kr'=>['name'=>'이투데이']
        , 'fnnews.com'=>['name'=>'파이낸셜뉴스']
        , 'fntimes.com'=>['name'=>'한국금융']
        , 'g-enews.com'=>['name'=>'글로벌이코노믹']
        , 'getnews.co.kr'=>['name'=>'글로벌경제신문']
        , 'ggilbo.com'=>['name'=>'금강일보']
        , 'hankyung.com'=>['name'=>'한국경제']
        , 'hg-times.com'=>['name'=>'한강Times']
        , 'inews24.com'=>['name'=>'아이뉴스24']
        , 'insight.co.kr'=>['name'=>'인사이트']
        , 'insightkorea.co.kr'=>['name'=>'InsightKorea']
        
        , 'joins.com'=>['name'=>'중앙일보']
        , 'kbs.co.kr'=>['name'=>'KBS']
        , 'kinews.net'=>['name'=>'KINEWS']
        , 'kmib.co.kr'=>['name'=>'국민일보']
        , 'kukinews.com'=>['name'=>'쿠키뉴스']
        , 'mbn.co.kr'=>['name'=>'매일경제TV']
        , 'moneyweek.co.kr'=>['name'=>'머니투데이']
        , 'mt.co.kr'=>['name'=>'머니투데이']
        , 'mtn.co.kr'=>['name'=>'머니투데이']
        , 'munhwa.com'=>['name'=>'문화일보']
        , 'naeil.com'=>['name'=>'내일신문']
        , 'naon.go.kr'=>['name'=>'국회뉴스ON']
        , 'news1.kr'=>['name'=>'뉴스1']
        , 'newsway.co.kr'=>['name'=>'뉴스웨이']
        , 'polinews.co.kr'=>['name'=>'폴리뉴스']
        , 'pressian.com'=>['name'=>'프레시안']
        
        , 'sbs.co.kr'=>['name'=>'SBS']
        , 'sedaily.com'=>['name'=>'서울경제']
        , 'sisajournal-e.com'=>['name'=>'시사저널']
        , 'sisain.co.kr'=>['name'=>'시사인']
        , 'sisaweek.com'=>['name'=>'시사위크']
        , 'skyedaily.com'=>['name'=>'스카이데일리']
        , 'sporbiz.co.kr'=>['name'=>'한국스포츠경제']
        , 'viva100.com'=>['name'=>'브릿지경제']
        , 'webdaily.co.kr'=>['name'=>'웹데일리']
        , 'wolyo.co.kr'=>['name'=>'MDN']
        , 'wowtv.co.kr'=>['name'=>'와우경제TV']
        , 'yonhapnews.co.kr'=>['name'=>'연합뉴스']
        , 'ytn.co.kr'=>['name'=>'YTN']
        , 'zdnet.co.kr'=>['name'=>'메가뉴스']
    ];
    /**
     * url을 이용하여 실제 배포업체의 이름을 발견한다.
     */
    public function findPublisher($link=null){
        $pieces = parse_url($link);
        $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
            
            $domain = $regs['domain'];
            
            return isset($this->publisher[$domain]['name'])?$this->publisher[$domain]['name']:$domain;
        }
        return '';
    }
    

}