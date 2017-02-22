<?php
/**
 * author: yangyue
 * time: 17-1-21 上午9:50
 * description:
 */
ini_set('date.timezone','Asia/Shanghai');
//curl抓取bing壁纸
class  BingPic
{
    private $hostname;
    private $image_url;
    private $json_url;
    private $curl;
    public function __construct()
    {
        $this->set_curl();
        $this->hostname= 'cn.bing.com';
        $this->json_url = 'http://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1';
        $this->image_url = $this->get_url();
    }
    public function get_url()
    {
        curl_setopt($this->curl,CURLOPT_URL,$this->json_url);
        curl_setopt($this->curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($this->curl,CURLOPT_HEADER,0);
        $output = curl_exec($this->curl);
        $arr = json_decode($output,true);
        $url = $this->hostname.$arr['images'][0]['url'];
        return $url;
    }
    public function set_curl()
    {
        $ch = curl_init();
        $this->curl = $ch;
        return $this->curl;
    }
    public function save_image()
    {
        if (!file_exists('/var/www/html/blog/html/img/'))
        {
            mkdir('/var/www/html/blog/html/img/');
        }
        $fp = fopen('/var/www/html/blog/html/img/'.'1.jpg','w+');
        curl_setopt($this->curl,CURLOPT_URL,$this->image_url);
        curl_setopt($this->curl,CURLOPT_FILE,$fp);
        curl_setopt($this->curl,CURLOPT_HEADER,0);
        curl_setopt($this->curl,CURLOPT_FOLLOWLOCATION,1);
        curl_setopt($this->curl,CURLOPT_TIMEOUT,60);
        curl_exec($this->curl);
        fclose($fp);
    }
    public function __destruct()
    {
        curl_close($this->curl);
    }
}
$worker = new BingPic();
$worker->save_image();
