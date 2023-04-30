<?php

namespace App\Services;

use VK\Client\VKApiClient;

class VkApiService 
{
     private VKApiClient $vkApiClient;

     public function __construct()
     {
          $this->vkApiClient = new VKApiClient();
     }

     public function getCitiesFromVkApi(): array
     {
          $params = [
               'country_id' => 1, 
               'count' => 150,
          ];
          $cities = [];

          $data = $this->vkApiClient->database()->getCities(env('VK_ACCESS_TOKEN'), $params);

          $cities = $data['items'];
     
          return $cities;
     }
}
?>
