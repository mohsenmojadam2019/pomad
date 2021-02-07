<?php


namespace App\Services\Sms;


use App\DataTransferObject\SendSmsDTO;
use App\Services\Client\Client;

class Sms
{
    private $client;
    private $sendMethod = '/send/simple';

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function sendSms(SendSmsDTO  $sendSmsDTO)
    {
        $requestData = $this->getRequestData($sendSmsDTO);
        $header = [
            'apikey'    =>  config('sms.parsasms.token')
        ];
        $url = config('sms.parsasms.uri') . $this->sendMethod;

        $this->client->send($url,'POST', $requestData, $header);
    }

    private function getRequestData(SendSmsDTO $sendSmsDTO)
    {
        return [
            'message'   =>  $sendSmsDTO->getMessage(),
            'receptor'  =>  $sendSmsDTO->getReceptor(),
            'sender'    =>  config('sms.parsasms.sender')
        ];

    }

}
