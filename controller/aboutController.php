<?php
/**
 * author: yangyue
 * time: 17-2-21 下午7:35
 * description:
 */
namespace controller;
use com\baseController;
class aboutController extends  baseController {
    public function index() {
        $this->display('about/index.html');
    }

    public function pdfdownload(){
        $file = ROOT."/html/pdf/1.pdf";
        $fileName = pathinfo($file,PATHINFO_FILENAME);
        $filePath = realpath($file);
        $fp = fopen($filePath,'rb');
        if(!$filePath || !$fp){
            header('HTTP/1.1 404 Not Found');
            echo "Error: 404 Not Found.(server file path error)";
            exit;
        }

        $fileName = $fileName .'.'. pathinfo($filePath,PATHINFO_EXTENSION);
        $encoded_filename = urlencode($fileName);
        $encoded_filename = str_replace("+", "%20", $encoded_filename);

        header('HTTP/1.1 200 OK');
        header( "Pragma: public" );
        header( "Expires: 0" );
        header("Content-type: application/octet-stream");
        header("Content-Length: ".filesize($filePath));
        header("Accept-Ranges: bytes");
        header("Accept-Length: ".filesize($filePath));

        $ua = $_SERVER["HTTP_USER_AGENT"];
        if (preg_match("/MSIE/", $ua)) {
            header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
        } else if (preg_match("/Firefox/", $ua)) {
            header('Content-Disposition: attachment; filename*="utf8\'\'' . $fileName . '"');
        } else {
            header('Content-Disposition: attachment; filename="' . $fileName . '"');
        }

        //ob_end_clean(); //<--有些情况可能需要调用此函数
        // 输出文件内容
        fpassthru($fp);
        exit;
    }
}