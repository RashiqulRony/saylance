<?php

namespace App\Trait;

use App\Models\AdLink;

trait Helper
{
    public function linkCheck($link)
    {
        if (substr($link, 0, 7) == "http://") {
            $url = $link;
        }elseif (substr($link, 0, 8) == "https://") {
            $url = $link;
        }elseif (substr($link, 0, 4) == "www.") {
            $url = "http://$link";
        } else {
            $url = "http://$link";
        }
        return $url;
    }

    public function storeLink(array $links, string $ip)
    {
        if (count($links)) {
            foreach ($links as $key => $link) {
                AdLink::updateOrCreate(
                    [
                        'ip_address' => $ip,
                        'links' => $links[$key],
                    ],[
                        'links' => $link,
                        'use_time' => date("Y-m-d H:i:s", strtotime('-26 hours')),
                    ]
                );
            }

            return [
                'status' => true,
                'data' => $this->linkUse($ip)
            ];
        } else {
            return [
                'status' => false
            ];
        }
    }

    public function linkUse(string $ip)
    {
        $adLink = new AdLink();
        $date = date("Y-m-d H:i:s");
        $dateCheck = $adLink->where('ip_address', $ip)->where('use_time', '<', $date)->count();

        if ($dateCheck > 0) {
            $activeCheck = $adLink->where('ip_address', $ip)->where('status', 'Active')->first();
            if ($activeCheck) {
                $linkId =  $adLink->where('id', '>', $activeCheck->id)->where('status', 'Inactive')->min('id');
                if ($linkId) {
                    $adLink->find($linkId)->update([
                        'status' => 'Active',
                        'use_time' => date("Y-m-d H:i:s", strtotime('+25 hours'))
                    ]);
                } else {
                    $adLink->update(['status' => 'Inactive']);
                }
                $activeCheck->where('status', 'Active')->first()->update([
                    'status' => 'Inactive',
                ]);
            } else {
                $adLink->where('ip_address', $ip)->where('use_time', '<', $date)->first()->update([
                    'status' => 'Active',
                    'use_time' => date("Y-m-d H:i:s", strtotime('+25 hours'))
                ]);
            }
            return $adLink->where('ip_address', $ip)->where('status', 'Active')->first();
        } else {
            if ($adLink->where('status', 'Active')->first()) {
                $adLink->where('status', 'Active')->first()->update([
                    'status' => 'Inactive',
                ]);
            }
            return null;
        }
    }
}
