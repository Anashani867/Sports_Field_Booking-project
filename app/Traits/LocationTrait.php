<?php
namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait LocationTrait
{
    public function getLocationNameFromOSM($latitude, $longitude)
    {
        $url = "https://nominatim.openstreetmap.org/reverse?lat={$latitude}&lon={$longitude}&format=json";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();

            // تأكد من وجود اسم المكان في البيانات المسترجعة
            return $data['display_name'] ?? 'Unknown location';
        }

        return 'Unknown location';
    }
}