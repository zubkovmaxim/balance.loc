<?php
class BalanceWidget extends CWidget {
    public $user;
    public $data = null;


    public function getBalance(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://balance.loc/api/balance/'.$this->user->Id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Key: 123'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        if ($response->message == "Record not found."){
            $this->data = 'RECORDS NOT FOUNT';
        }
        elseif ($response->message == 'Wrong secretKey.'){
            $this->data = 'Wrong secretKey';
        }
        else{
            $this->data = $response;
        }
    }
    public function run() {
        $this->getBalance();
        $this->render('balance', array(
            'data' => $this->data,
        ));
    }
}