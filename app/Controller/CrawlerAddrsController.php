<?php

App::uses('AppController', 'Controller');
App::import('Vendor', 'simple_html_dom', array('file'=>'simple_html_dom.php'));

class CrawlerAddrsController extends AppController {
    
    var $list_shop = array();
    public function getHtmlFile() {
        
        $cityNumber = array(
            3 => 'ha noi',
            5 => 'ho chi minh',
            6 => 'da nang'
        );
        
        $shopNumber = array(
//            'cafe' => array(
//                'sid' => 141,
//                'parentSid' => 97
//            ),
//            'company' => array(
//                'sid' => 292,
//                'parentSid' => 253
//            ),
//            'thoi trang nam' => array(
//                'sid' => 546,
//                'parentSid' => 521
//            ),
//            'thoi trang nu' => array(
//                'sid' => 547,
//                'parentSid' => 521
//            ),
//            'trung tam tt,sieu thi' => array(
//                'sid' => 168,
//                'parentSid' => 521
//            ),
//            'my pham,nuoc hoa' => array(
//                'sid' => 338,
//                'parentSid' => 521
//            ),
//            'trang suc' => array(
//                'sid' => 368,
//                'parentSid' => 521
//            ),
//            'giay dep' => array(
//                'sid' => 357,
//                'parentSid' => 521
//            ),
//            'mu bao hiem' => array(
//                'sid' => 376,
//                'parentSid' => 521
//            ),
//            'kinh mat' => array(
//                'sid' => 377,
//                'parentSid' => 521
//            ),
//            'dong ho' => array(
//                'sid' => 380,
//                'parentSid' => 521
//            ),
//            'do choi' => array(
//                'sid' => 381,
//                'parentSid' => 521
//            ),
//            'dung cu the thao' => array(
//                'sid' => 382,
//                'parentSid' => 521
//            ),
//            'do gia dung' => array(
//                'sid' => 383,
//                'parentSid' => 521
//            ),
//            'tap hoa' => array(
//                'sid' => 384,
//                'parentSid' => 521
//            ),
//            'thu cong,my nghe' => array(
//                'sid' => 385,
//                'parentSid' => 521
//            ),
//            'cho' => array(
//                'sid' => 544,
//                'parentSid' => 521
//            ),
//            'thoi trang tre em' => array(
//                'sid' => 549,
//                'parentSid' => 521
//            ),
//            'may mac' => array(
//                'sid' => 551,
//                'parentSid' => 521
//            ),
//            'cap,tui,vali' => array(
//                'sid' => 552,
//                'parentSid' => 521
//            ),
//            'day lung,vi da' => array(
//                'sid' => 620,
//                'parentSid' => 521
//            ),
            'vp pham' => array(
                'sid' => 638,
                'parentSid' => 521
            ),
            'qua tang,luu niem' => array(
                'sid' => 650,
                'parentSid' => 521
            ),
            'dien may' => array(
                'sid' => 882,
                'parentSid' => 521
            ),
            'dien thoai' => array(
                'sid' => 565,
                'parentSid' => 521
            ),
        );
        $this->loadModel('Shop');
        $this->loadModel('Addr');
        $this->loadModel('ShopType');
                echo '<pre>';
        foreach ($cityNumber as $cityId => $city) {
            
            foreach ($shopNumber as $shopType => $value) {
                $page = 1;
                $html = file_get_contents('http://diachiso.com/Shop/CityPage_LoadShopBySubServiceIdAndFilterId?pageindex=1&pagesize=20&sid='.$value['sid'].'&fid=&cityid='.$cityId.'&parentSid=521');   

                while ($html != '') {
                    $page = $page+1;
                    $this->getElement($html,$shopType,$city);
                    $html = file_get_contents('http://diachiso.com/Shop/CityPage_LoadShopBySubServiceIdAndFilterId?pageindex='.$page.'&pagesize=20&sid='.$value['sid'].'&fid=&cityid='.$cityId.'&parentSid=521');   
                }
                $this->Shop->create();
                if ($this->Shop->saveAll($this->list_shop)) {
                    $list_related = $this->Shop->list_related;

                    $this->Addr->create();
                    $this->Addr->saveAll($list_related);
                    $this->ShopType->create();
                    $this->ShopType->saveAll($list_related);
                    $this->Shop->list_related = array();
                    echo count($this->list_shop).'tong danh sach<br>';
                    $this->list_shop = array();
                }
                unset($this->data);
                var_dump($list_related);
                echo '<br/><br/>';
            }
        }
        $this->render(false);
    }
    
    
    public function getElement($stringHtml = '',$type = '',$city = '') {
        $doc = new DOMDocument();
        $doc->strictErrorChecking = false;
        $doc->recover = true;
        @$doc->loadHTML('<html><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta content="vi" http-equiv="Content-Language">
<meta content="vi" name="Language"></head><body>' . $stringHtml . "</body></html>");

        $xpath = new DOMXpath($doc);
        $elements = $xpath->query('.//div[@class="media shoplist"]');
        
        for ($i = 0; $i < $elements->length; $i++) {
            $image = str_replace('test.','',$xpath->query('.//div[@class="media shoplist"]/a/img')->item($i)->getAttribute('src'));
            $image = str_replace('/thumbs','',$image);
            
            
            
            $address = $xpath->query('.//div[@class="media shoplist"]/div[@class="media-body"]/p[@class="text-info"]')->item($i)->nodeValue; // Google HQ
            $prepAddr = str_replace(' ','+',$address);

            $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?key=AIzaSyC4dU2OgNpkbLhP1kylz1ssWvrct08DnlI&address='.$prepAddr.'&sensor=false');

            $output= json_decode($geocode);

            $locaton = array(
                'lat' => $output->results[0]->geometry->location->lat,
                'long' => $output->results[0]->geometry->location->lng
            );
            
            $this->list_shop[] = array(
                'city' => $city,
                'shop_type_name' => $type,
                'user_id' => 1,
                'shop_name' => $xpath->query('.//div[@class="media shoplist"]/div[@class="media-body"]/h4/a')->item($i)->nodeValue,
                'address' => $address,
                'location' => json_encode($locaton),
                'shop_avatar' => $image,
                'shop_decs' => $xpath->query('.//div[@class="media shoplist"]/div[@class="media-body"]/blockquote')->item($i)->nodeValue  ,
                'shop_phone' => $xpath->query('.//div[@class="media shoplist"]/div[@class="media-body"]/p/i[@class="icon-phone-sign"]/following-sibling::node()')->item($i)->nodeValue ,
                'shop_websire' => $xpath->query('.//div[@class="media shoplist"]/div[@class="media-body"]/p/i[@class="icon-link"]/following-sibling::node()')->item($i)->nodeValue
            );
        }
    }
    
    
    public function index() {
        //k lay ca layout lan view action
        $this->autoRender = FALSE;
        $html = file_get_contents('http://mannup.vn/');
        $doc = new DOMDocument();
        $doc->strictErrorChecking = false;
        $doc->recover = true;
        @$doc->loadHTML("<html><body>" . $html . "</body></html>");

        $xpath = new DOMXpath($doc);
        $elements = $xpath->query('.//div[@class="item"]');
        for ($i = 0; $i < $elements->length; $i++) {
            echo $xpath->query('.//div[@class="item"]/h3/a')->item($i)->nodeValue . '<br>';
            echo $xpath->query('.//div [contains(@class, "item")]/div [contains(@class, "item-image")]/a/img')->item($i)->getAttribute('src') . '<br>';
        }
        //chi k lay view action thoi,con lay layout
        //$this->render(false);
    }

}
