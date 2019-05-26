<?php
namespace Config;

use P3x\Str;

define("PlayGroundGithubYear", date('Y'));

/**
 * Class PlayGround
 * @package Config
 */
class PlayGround
{

    /**
     * @var array
     */
    public static $playground
        = [

            [
                'title' => 'GitHub',
                'year' => PlayGroundGithubYear,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/',
                    'WWW' => 'https://pages.corifeus.com/',
                ]
            ],


            [
                'title' => 'P3X Reds UI',
                'year' => 2018,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/redis-ui',
                    'WWW' => 'https://pages.corifeus.com/redis-ui',
                    'Test online' => 'https://p3x.redis.patrikx3.com/main/statistics',
                ],
                'image' => [
                    'https://cdn.corifeus.com/git/redis-ui/artifacts/preview-images/preview.png',
                    'https://cdn.corifeus.com/git/redis-ui/artifacts/preview-images/preview-2.png',
                    'https://cdn.corifeus.com/git/redis-ui/artifacts/preview-images/preview-3.png',
                    'https://cdn.corifeus.com/git/redis-ui/artifacts/preview-images/preview-4.png',
                    'https://cdn.corifeus.com/git/redis-ui/artifacts/preview-images/preview-5.png',
                ],
            ],

            [
                'title' => 'P3X Freenom',
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/freenom',
                    'WWW' => 'https://pages.corifeus.com/freenom',
                    'NPM' => 'https://www.npmjs.com/package/p3x-freenom',
                ]
            ],

            [
                'title' => 'P3X Gitlist',
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/gitlist',
                    'Gitlist' => 'https://gitlist.patrikx3.com',
                ]
            ],

            [

                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub LEDE' => 'https://github.com/patrikx3/lede-insomnia',
                    "CDN LEDE" => 'https://cdn.corifeus.com/lede/',
                    'GitHub OpenWrt' => 'https://github.com/patrikx3/openwrt-insomnia',
                    "WWW OpenWrt" => 'https://pages.corifeus.com/openwrt-insomnia/',
                    "CDN OpenWrt" => 'https://cdn.corifeus.com/openwrt/',
                ]
            ],

            [
                'title' => 'LEDE / OpenWrt Redis',
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub LEDE' => 'https://github.com/patrikx3/lede-redis',
                    "CDN LEDE" => 'https://cdn.corifeus.com/lede/',
                    'GitHub OpenWrt' => 'https://github.com/patrikx3/openwrt-redis',
                    "WWW OpenWrt" => 'https://pages.corifeus.com/openwrt-redis/',
                    "CDN OpenWrt" => 'https://cdn.corifeus.com/openwrt/',
                ]
            ],

            [
                'title' => 'LEDE MariaDB 10',
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/lede-mariadb',
                    "CDN" => 'https://cdn.corifeus.com/lede/',
                ]
            ],



            [
                'title' => 'P3X Linux Onenote',
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/onenote',
                    "WWW" => 'https://pages.corifeus.com/onenote/',
                    'NPM' => 'https://www.npmjs.com/package/p3x-onenote',
                ]

            ],
            [
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/ramdisk',
                    "WWW" => 'https://pages.corifeus.com/ramdisk/',
                    'NPM' => 'https://www.npmjs.com/package/p3x-ramdisk',
                ]

            ],
            [
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/aes-folder',
                    "WWW" => 'https://pages.corifeus.com/aes-folder/',
                    'NPM' => 'https://www.npmjs.com/package/p3x-aes-folder',
                ]

            ],
            [
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/systemd-manager',
                    "WWW" => 'https://pages.corifeus.com/systemd-manager/',
                    'NPM' => 'https://www.npmjs.com/package/p3x-systemd-manager',
                ]

            ],
            [
                'year' => 2017,
                'country' => 'hu',
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/angular-compile',
                    'WWW' => 'https://pages.corifeus.com/angular-compile/',
                    'NPM' => 'https://www.npmjs.com/package/p3x-angular-compile',
                ]

            ],
            [
                'year' => 2016,
                'country' => 'hu',
                'image' => [
                    'files/playground/corifeus-architecture/corifeus-p3x-brick.svg',
                    'files/playground/corifeus-architecture/corifeus-p3x-tdd-component.svg',
                ],
            ],
            [
                'year' => 2016,
                'country' => 'hu',
                'url' => [
                    'Github' => 'https://github.com/patrikx3/resume-web',
                    'Travis' => 'https://travis-ci.com/patrikx3/resume-web',
                    'Composer' => 'https://packagist.org/packages/p3x/resume-common',
                    'Bower' => 'https://bower.io/search/?q=p3x',
                    'Docker' => 'https://hub.docker.com/r/patrikx3/resume/',
                ]
            ],
            [
                'year' => 2016,
                'country' => 'hu',
            ],
            [
                'year' => 2011,
                'country' => 'hu',
            ],
            [
                'year' => 2009,
                'url' => [
                    'GitHub' => 'https://github.com/patrikx3/service-manager-tray-for-windows/'
                ],
                'image' => [
                    'files/playground/winservicemanager/window.png',
                    'files/playground/winservicemanager/tray.png',
                ],
                'country' => 'hu',
            ],
            [
                'year' => 2005,
                'image' => [
                    'files/playground/corifeus-sites/stopshophere.jpg',
                    'files/playground/corifeus-sites/bestkeptsecretinbeverlyhills.jpg',
                    'files/playground/corifeus-sites/bestkeptsecretinbeverlyhillsbanners.gif',
                    'files/playground/corifeus-sites/protectyoureyes.jpg',
                    'files/playground/corifeus-sites/macdaddy.jpg',
                    'files/playground/corifeus-sites/chat.png',
                    'files/playground/corifeus-sites/marco_thumb.gif',
                    'files/playground/corifeus-sites/medicalcables.jpg',
                    'files/playground/corifeus-sites/primeid.jpg',
                    'files/playground/corifeus-sites/primeid2.jpg',
                    'files/playground/corifeus-sites/yocard.jpg',
                    'files/playground/corifeus-sites/bagsfromhouston.jpg',
                    'files/playground/corifeus-sites/benwin.jpg',
                ],
                'country' => 'us',
            ],
            [
                'year' => 2004,
                'image' => [
                    'files/playground/corifeus-images/corifeus-2003-2560x1024.jpg',
                    'files/playground/corifeus-images/zhenia-2003-christmas-collection-back-outside.jpg',
                    'files/playground/corifeus-images/corifeus-2002-2560x1024.jpg',
                    'files/playground/corifeus-images/corifeus-2001-2560x1024.jpg',
                    'files/playground/corifeus-images/corifeus-2000-1280x1024.jpg',
                    'files/playground/corifeus-images/cd_afro_blue_1cover.jpg',
                    'files/playground/corifeus-images/cd_afro_blue_3under.jpg',
                    'files/playground/corifeus-images/cd_afro_blue_4back.jpg',
                    'files/playground/corifeus-images/cd_pearl_1cover.jpg',
                    'files/playground/corifeus-images/cd_pearl_4back.jpg',
                    'files/playground/corifeus-images/cd_rare_1cover.jpg',
                    'files/playground/corifeus-images/cd_rare_3under.jpg',
                    'files/playground/corifeus-images/cd_rare_4back.jpg',
                    'files/playground/corifeus-images/dm1.jpg',
                    'files/playground/corifeus-images/dm2.jpg',
                    'files/playground/corifeus-images/marcos_full.jpg',
                    'files/playground/corifeus-images/Stamp-Fun.jpg',
                    'files/playground/corifeus-images/Stamp-Spring.jpg',
                ],
                'country' => 'us',
            ],
            [
                'year' => 2001,
                'url' => [
                    'Corifeus' => 'http://web.archive.org/web/20010805200306/http://www.corifeus.com/index.x',
                    'Corifeus V2' => 'http://web.archive.org/web/20041022000700/http://www.corifeus.com/clients.php'
                ],
                'image' => [
                    'files/playground/corifeus/corifeus-1.png',
                    'files/playground/corifeus/corifeus-2.png',
                ],
                'country' => 'us',
            ],
            [
                'year' => 1999,
                'flash' => [
                    [
                        'files/playground/corifeus-flash/jukebox.swf',
                        600,
                        400
                    ],
                    [
                        'files/playground/corifeus-flash/patrik.swf',
                        720,
                        440
                    ]
                ],
                'country' => 'us',
            ]
        ];

    /**
     * @param $locale_playground
     * @return mixed
     */
    public static function PlaygroundFiller($locale_playground)
    {

        foreach (static::$playground as $index => $game) {
            $new_game = array_merge($game, $locale_playground[$index]);
            $new_game['id'] = Str::ToUrl(($new_game['title']));
            $playground[$index] = $new_game;

        }
        return $playground;
    }

}
