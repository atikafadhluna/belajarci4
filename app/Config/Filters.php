<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filterkepsek'    => \App\Filters\FilterKepsek::class,
        'filtercsiswa'    => \App\Filters\FilterCSiswa::class,
        'filterpanitia'    => \App\Filters\Filterpanitia::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [

            'filterkepsek' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                '/'
            ]],
            'filterpanitia' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                '/'
            ]],
            'filtercsiswa' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                '/'
            ]]

        ],
        'after' => [
            'filterkepsek' => ['except' => [
                'auth', 'auth/*',
                'kepsek', 'kepsek/*',
                'home', 'home/*',
                'managelampiran', 'managelampiran/*',
                'tambahpanitia', 'tambahpanitia/*',
                'managepekerjaan', 'managepekerjaan/*',
                'tahunajaran', 'tahunajaran/*',
                '/'
            ]],
            'filterpanitia' => ['except' => [
                'auth', 'auth/*',
                'panitia', 'panitia/*',
                'home', 'home/*',
                'ujian', 'ujian/*',
                'laporan', 'laporan/*',
                'datappdb', 'datappdb/*',
                '/'
            ]],
            'filtercsiswa' => ['except' => [
                'auth', 'auth/*',
                'home', 'home/*',
                'csiswa', 'csiswa/*',
                'formulir', 'formulir/*',
                'ujian', 'ujian/*',
                'hasilujian', 'hasilujian/*',
                'printformulir', 'printformulir/*',
                '/'
            ]],
            'toolbar',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
