<?php
class main{

    private $private;
    private $public;

    public function __construct()
    {
        $this->get_keys();
        $result = $this->post_data();
        $this->validation_date($result);
    }

    private function get_keys(){
        $this->private = openssl_pkey_get_private(file_get_contents("bfa87fee-private-key.key"));
        $this->public = openssl_pkey_get_public(file_get_contents("bfa87fee-public-key.pub"));
    }

    private function post_data(): string{
    $date = date("YmdHis");
    $url = 'http://payway.bubileg.cz/api/echo';
    $data = ("bfa87fee|" . $date);
    openssl_sign($data, $signature, $this->private);
    $signature = BASE64_ENCODE($signature);
    $postdata = array("merchantId" => "bfa87fee","dttm"=>$date,"signature"=>$signature);
    }
    private function validation_date($result): void{
        echo("<h1>Ověřování přijatých dat</h1>");
        $data = json_decode($result, true);
        $string = $data["resultCode"] . "|" . $data["resultMessage"] . "|" . $data["dttm"];
    }
}
?>