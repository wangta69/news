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
        , 'betanews.net'=>['name'=>'베타뉴스']
        , 'bizwatch.co.kr'=>['name'=>'비즈니스워치']
        , 'businesspost.co.kr'=>['name'=>'비즈니스포스트']
        , 'chosun.com'=>['name'=>'조선일보']
        , 'cine21.com'=>['name'=>'씨네21']
        , 'cnbnews.com'=>['name'=>'CNB저널']
        , 'dailian.co.kr'=>['name'=>'데일리안']
        , 'dailygrid.net'=>['name'=>'데일리그리드']
        , 'datanet.co.kr'=>['name'=>'데이타넷']
        , 'ddaily.co.kr'=>['name'=>'디지털데일리']
        , 'donga.com'=>['name'=>'동아닷컴']
        , 'dt.co.kr'=>['name'=>'디지털타임스']
        , 'ebn.co.kr'=>['name'=>'EBN']
        , 'economytalk.kr'=>['name'=>'economytalk']
        , 'econonews.co.kr'=>['name'=>'이코노뉴스']
        , 'econovill.com'=>['name'=>'이코노믹리뷰']
        , 'edaily.co.kr'=>['name'=>'이데일리']
        , 'einfomax.co.kr'=>['name'=>'연합인포맥스']
        , 'www.ekn.kr'=>['name'=>'에너지경제']
        , 'enewstoday.co.kr'=>['name'=>'이뉴스투데이']
        , 'etnews.com'=>['name'=>'전자신문']
        , 'etoday.co.kr'=>['name'=>'이투데이']
        , 'fnnews.com'=>['name'=>'파이낸셜뉴스']
        , 'fntimes.com'=>['name'=>'한국금융']
        , 'futurekorea.co.kr'=>['name'=>'미래한국']
        , 'g-enews.com'=>['name'=>'글로벌이코노믹']
        , 'http://gamefocus.co.kr'=>['name'=>'게임포커스']
        , 'gametoc.co.kr'=>['name'=>'게임톡']
        , 'getnews.co.kr'=>['name'=>'글로벌경제신문']
        , 'ggilbo.com'=>['name'=>'금강일보']
        , 'gnmaeil.com'=>['name'=>'경남매일']
        , 'greened.kr'=>['name'=>'녹색경제']
        , 'gukjenews.com'=>['name'=>'국제뉴스']
        , 'hankooki.com'=>['name'=>'데일리한국']
        , 'hankyung.com'=>['name'=>'한국경제']
        , 'heraldcorp.com'=>['name'=>'헤럴드경제']
        
        , 'hg-times.com'=>['name'=>'한강Times']
        , 'inews24.com'=>['name'=>'아이뉴스24']
        , 'insight.co.kr'=>['name'=>'인사이트']
        , 'insightkorea.co.kr'=>['name'=>'InsightKorea']
        
        , 'joins.com'=>['name'=>'중앙일보']
        , 'kbs.co.kr'=>['name'=>'KBS']
        , 'kbanker.co.kr'=>['name'=>'대한금융신문']
        , 'kidd.co.kr'=>['name'=>'산업일보']
        , 'kinews.net'=>['name'=>'KINEWS']
        , 'kjdaily.com'=>['name'=>'광주매일신문']
        , 'kmib.co.kr'=>['name'=>'국민일보']
        , 'knnews.co.kr'=>['name'=>'경남신문']
        , 'kukinews.com'=>['name'=>'쿠키뉴스']
        , 'lawissue.co.kr'=>['name'=>'로이슈']
        , 'mbn.co.kr'=>['name'=>'매일경제TV']
        , 'meconomynews.com'=>['name'=>'시장경제']
        , 'mediapen.com'=>['name'=>'미디어펜']
        , 'metroseoul.co.kr'=>['name'=>'메트로']
        , 'mk.co.kr'=>['name'=>'매일경제']
        , 'moneyweek.co.kr'=>['name'=>'머니투데이']
        , 'mt.co.kr'=>['name'=>'머니투데이']
        , 'mtn.co.kr'=>['name'=>'머니투데이']
        , 'munhwa.com'=>['name'=>'문화일보']
        , 'naeil.com'=>['name'=>'내일신문']
        , 'naon.go.kr'=>['name'=>'국회뉴스ON']
        , 'nbnnews.co.kr'=>['name'=>'내외뉴스통신']
        , 'nbntv.co.kr'=>['name'=>'내외경제TV']
        , 'newdaily.co.kr'=>['name'=>'뉴데일리']
        , 'news1.kr'=>['name'=>'뉴스1']
        , 'newsinside.kr'=>['name'=>'뉴스인사이드']
        , 'newsis.com'=>['name'=>'뉴시스']
        , 'newspim.com'=>['name'=>'뉴스핌']
        , 'newstomato.com'=>['name'=>'뉴스토마토']
        , 'newsway.co.kr'=>['name'=>'뉴스웨이']
        , 'newsworks.co.kr'=>['name'=>'뉴스웍스']
        , 'platum.kr'=>['name'=>'플래텀']
        , 'polinews.co.kr'=>['name'=>'폴리뉴스']
        , 'ppss.kr'=>['name'=>'ㅍㅍㅅㅅ']
        , 'pressian.com'=>['name'=>'프레시안']
        
        , 'sbs.co.kr'=>['name'=>'SBS']
        , 'sedaily.com'=>['name'=>'서울경제']
        , 'seoulfn.com'=>['name'=>'서울파이낸스']
        , 'sisajournal-e.com'=>['name'=>'시사저널']
        , 'sisain.co.kr'=>['name'=>'시사인']
        , 'sisaon.co.kr'=>['name'=>'시사오늘']
        , 'sisaweek.com'=>['name'=>'시사위크']
        , 'skyedaily.com'=>['name'=>'스카이데일리']
        , 'smedaily.co.kr'=>['name'=>'중소기업신문']
        , 'speconomy.com'=>['name'=>'스페셜경제']
        , 'sporbiz.co.kr'=>['name'=>'한국스포츠경제']
        , 'sportsseoul.com'=>['name'=>'스포츠서울']
        , 'starseoultv.com'=>['name'=>'뉴스인사이드']
        , 'thebell.co.kr'=>['name'=>'더벨']
        , 'viva100.com'=>['name'=>'브릿지경제']
        , 'webdaily.co.kr'=>['name'=>'웹데일리']
        , 'weeklytoday.com'=>['name'=>'위클리오늘']
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