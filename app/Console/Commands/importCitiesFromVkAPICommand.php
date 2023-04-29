<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\VkApiService;

class importCitiesFromVkAPICommand extends Command
{
    protected $signature = 'import:cities';

    protected $description = 'GET array of cities from VK API';

    public function handle()
    {
        $request = new VkApiService('vk.com/select_ajax.php?act=a_get_cities&country=1&str=$$$***');

        $respounse = $request->client->request('GET');

        $cities = $respounse->getBody()->getContents();
    }
}
