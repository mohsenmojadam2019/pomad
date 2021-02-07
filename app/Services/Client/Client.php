<?php


namespace App\Services\Client;


use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

/**
 * Class Client
 * @package App\Services\Client
 */
class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    private  $client;

    /**
     * Client constructor.
     * @param \GuzzleHttp\Client $client
     */
    public function __construct(\GuzzleHttp\Client  $client)
    {
        $this->client = $client;
    }

    /**
     * @param $url
     * @param string $method
     * @param array $data
     * @param array $header
     * @throws GuzzleException
     * @throws Exception
     */
    public function send( $url, $method = 'GET', $data = [], $header = [])
    {
        $requestData  = [];
        switch ($method){
            case 'POST':
                $requestData = [
                    'form_params' =>   $data,
                    'headers'    =>  $header
                ];
                break;
            case 'GET':
                break;
        }
        try {

            $request = $this->client->request($method,$url,$requestData);

            return $request->getBody()->getContents();
        }catch (Exception $e){

            Log::error('message sending failed with error: ' . $e->getMessage());
            throw $e;

        }
    }
}

