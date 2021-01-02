<?php


namespace App\Services\HttpClient;

use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\Mixed_;

class HttpClient extends Http
{
    /**
     * Return search result
     *
     * @param string $url
     * @return array|mixed
     */
    public function request(string $url)
    {
        $response = self::get($url);
        if ($response->status() == 200) {
            $resultSearch = $this->getResult($response->json());
        } else {
            $resultSearch = 'Error on the server, please contact the support service';
        }
        return $resultSearch;
    }

    /**
     * Return array options
     *
     * @param $response
     * @return array|string
     */
    private function getResult($response)
    {
        if ($response['Results'][0]['ErrorCode'] == 0) {
            $result = array();
            foreach ($response['Results'][0] as $option => $type) {
                if($type) {
                    $result[] = [$option => $type];
                }
            }
        } else {
            $result = $response['Results'][0]['ErrorText'];
        }
        return $result;
    }
}
