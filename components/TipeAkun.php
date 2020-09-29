<?php


namespace app\components;


class TipeAkun
{
    const ROOT = ROOT;
    const MEDIS = MEDIS;
    const NONMEDIS = NONMEDIS;
    const APLIKASI = APLIKASI;
    const Eksternal = Eksternal;

    public $items = [
        [
            'id' => MEDIS,
            'text' => 'Medis',
            'icon' => 'fa fa-user text-aqua',
            'keywords' => ['dokter', 'perawat', 'laboran'],
        ],
        [
            'id' => NONMEDIS,
            'text' => 'Non Medis',
            'icon' => 'fa fa-user text-green',
            'keywords' => ['farmasi', 'kas', 'akuntansi', 'pegawai'],
        ],
        [
            'id' => Eksternal,
            'text' => 'Eksternal',
            'icon' => 'fa fa-user text-orange',
            'keywords' => ['eksternal', 'eks'],
        ],
        [
            'id' => ROOT,
            'text' => 'ROOT',
            'icon' => 'fa fa-application text-green',
            'keywords' => ['aplikasi', 'app'],
        ],
        [
            'id' => APLIKASI,
            'text' => 'APLIKASI',
            'icon' => 'fa fa-application text-green',
            'keywords' => ['aplikasi', 'app'],
        ],
    ];
}