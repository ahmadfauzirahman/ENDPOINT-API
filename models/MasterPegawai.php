<?php

namespace app\models\Kepegawaian;

use app\models\Kepegawaian\Master\MasterKecamatan;
use app\models\Kepegawaian\Master\MasterKelurahanDesa;
use Yii;

/**
 * This is the model class for table "pegawai.tb_pegawai".
 *
 * @property int $pegawai_id
 * @property string $id_nip_nrp
 * @property string|null $nama_lengkap
 * @property string|null $gelar_sarjana_depan
 * @property string|null $gelar_sarjana_belakang
 * @property string|null $tempat_lahir
 * @property string|null $tanggal_lahir
 * @property string|null $jenis_kelamin
 * @property string|null $status_perkawinan
 * @property string|null $agama
 * @property string|null $alamat_tempat_tinggal
 * @property string|null $rt_tempat_tinggal
 * @property string|null $rw_tempat_tinggal
 * @property string|null $desa_kelurahan
 * @property string|null $kecamatan
 * @property string|null $kabupaten_kota
 * @property string|null $provinsi
 * @property int|null $kode_pos
 * @property string|null $no_telepon_1
 * @property string|null $no_telepon_2
 * @property string|null $golongan_darah
 * @property int|null $status_kepegawaian_id
 * @property int|null $jenis_kepegawaian_id
 * @property string|null $nomor_karpeg
 * @property string|null $nomor_kartu_askes
 * @property string|null $nomor_kartu_taspen
 * @property string|null $nomor_karis_karsu
 * @property string|null $npwp
 * @property string|null $nomor_ktp
 * @property string|null $nota_persetujuan_bkn_nomor_cpns
 * @property string|null $nota_persetujuan_bkn_tanggal_cpns
 * @property string|null $pejabat_yang_menetapkan_cpns
 * @property string|null $sk_cpns_nomor_cpns
 * @property string|null $sk_cpns_tanggal_cpns
 * @property int|null $kode_pangkat_cpns
 * @property string|null $tmt_cpns
 * @property int|null $masa_kerja_tahun_cpns
 * @property int|null $masa_kerja_bulan_cpns
 * @property string|null $pejabat_yang_menetapkan_pns
 * @property string|null $sk_nomor_pns
 * @property string|null $sk_tanggal_pns
 * @property string|null $kode_pangkat_pns
 * @property string|null $tmt_pns
 * @property string|null $sumpah_janji_pns
 * @property string|null $masa_kerja_tahun_pns
 * @property string|null $masa_kerja_bulan_pns
 * @property int|null $tinggi_keterangan_badan
 * @property int|null $berat_badan_keterangan_badan
 * @property string|null $rambut_keterangan_badan
 * @property string|null $bentuk_muka_keterangan_badan
 * @property string|null $warna_kulit_keterangan_badan
 * @property string|null $ciri_ciri_khas_keterangan_badan
 * @property string|null $cacat_tubuh_keterangan_badan
 * @property string|null $kegemaran_1
 * @property string|null $kegemaran_2
 * @property string|null $kegemaran_3
 * @property string|null $photo
 * @property int|null $status_aktif_pegawai
 * @property string|null $kode_kategori_pegawai
 * @property string|null $kode_jenis_kepegawaian_rl4
 * @property int|null $masa_kerja_honorer
 * @property int|null $tipe_user 1 = PNS, 2 = NON PNS
 */
class MasterPegawai extends \yii\db\ActiveRecord
{

    // public $kode_prov_kab_kec_kelurahan;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai.tb_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_nip_nrp'], 'required'],
            [['tanggal_lahir', 'kode_prov_kab_kec_kelurahan','kode_prov_kab_kecamatan', 'nota_persetujuan_bkn_tanggal_cpns', 'sk_cpns_tanggal_cpns', 'tmt_cpns', 'sk_tanggal_pns', 'tmt_pns'], 'safe'],
            [['kode_pos', 'status_kepegawaian_id', 'jenis_kepegawaian_id', 'kode_pangkat_cpns', 'masa_kerja_tahun_cpns', 'masa_kerja_bulan_cpns', 'tinggi_keterangan_badan', 'berat_badan_keterangan_badan', 'status_aktif_pegawai', 'masa_kerja_honorer', 'tipe_user'], 'default', 'value' => null],
            [['kode_pos', 'status_kepegawaian_id', 'jenis_kepegawaian_id', 'kode_pangkat_cpns', 'masa_kerja_tahun_cpns', 'masa_kerja_bulan_cpns', 'tinggi_keterangan_badan', 'berat_badan_keterangan_badan', 'status_aktif_pegawai', 'masa_kerja_honorer', 'tipe_user'], 'integer'],
            [['pejabat_yang_menetapkan_cpns', 'sk_cpns_nomor_cpns'], 'string'],
            [['id_nip_nrp', 'gelar_sarjana_belakang', 'tempat_lahir', 'desa_kelurahan', 'kecamatan', 'kabupaten_kota', 'provinsi', 'nomor_karpeg', 'nomor_kartu_askes', 'nomor_kartu_taspen', 'nomor_karis_karsu', 'nota_persetujuan_bkn_nomor_cpns'], 'string', 'max' => 30],
            [['nama_lengkap'], 'string', 'max' => 80],
            [['gelar_sarjana_depan', 'status_perkawinan'], 'string', 'max' => 20],
            [['jenis_kelamin'], 'string', 'max' => 10],
            [['agama', 'no_telepon_1', 'no_telepon_2'], 'string', 'max' => 15],
            [['alamat_tempat_tinggal', 'photo'], 'string', 'max' => 100],
            [['rt_tempat_tinggal', 'rw_tempat_tinggal', 'kode_pangkat_pns', 'sumpah_janji_pns'], 'string', 'max' => 5],
            [['golongan_darah'], 'string', 'max' => 3],
            [['npwp', 'nomor_ktp', 'pejabat_yang_menetapkan_pns', 'sk_nomor_pns', 'rambut_keterangan_badan', 'bentuk_muka_keterangan_badan', 'warna_kulit_keterangan_badan', 'ciri_ciri_khas_keterangan_badan', 'cacat_tubuh_keterangan_badan', 'kegemaran_1', 'kegemaran_2', 'kegemaran_3'], 'string', 'max' => 50],
            [['masa_kerja_tahun_pns', 'kode_kategori_pegawai', 'kode_jenis_kepegawaian_rl4'], 'string', 'max' => 4],
            [['masa_kerja_bulan_pns'], 'string', 'max' => 2],
            [['id_nip_nrp'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pegawai_id' => 'Pegawai ID',
            'id_nip_nrp' => 'Nip/Nik',
            'nama_lengkap' => 'Nama Lengkap',
            'gelar_sarjana_depan' => 'Gelar Sarjana Depan',
            'gelar_sarjana_belakang' => 'Gelar Sarjana Belakang',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'status_perkawinan' => 'Status Perkawinan',
            'agama' => 'Agama',
            'alamat_tempat_tinggal' => 'Alamat Tempat Tinggal',
            'rt_tempat_tinggal' => 'Rt Tempat Tinggal',
            'rw_tempat_tinggal' => 'Rw Tempat Tinggal',
            'desa_kelurahan' => 'Desa Kelurahan',
            'kecamatan' => 'Kecamatan',
            'kabupaten_kota' => 'Kabupaten Kota',
            'provinsi' => 'Provinsi',
            'kode_pos' => 'Kode Pos',
            'no_telepon_1' => 'No Telepon 1',
            'no_telepon_2' => 'No Telepon 2',
            'golongan_darah' => 'Golongan Darah',
            'status_kepegawaian_id' => 'Status Kepegawaian ID',
            'jenis_kepegawaian_id' => 'Jenis Kepegawaian ID',
            'nomor_karpeg' => 'Nomor Karpeg',
            'nomor_kartu_askes' => 'Nomor Kartu Askes',
            'nomor_kartu_taspen' => 'Nomor Kartu Taspen',
            'nomor_karis_karsu' => 'Nomor Karis Karsu',
            'npwp' => 'Npwp',
            'nomor_ktp' => 'Nomor Ktp',
            'nota_persetujuan_bkn_nomor_cpns' => 'Nota Persetujuan Bkn Nomor Cpns',
            'nota_persetujuan_bkn_tanggal_cpns' => 'Nota Persetujuan Bkn Tanggal Cpns',
            'pejabat_yang_menetapkan_cpns' => 'Pejabat Yang Menetapkan Cpns',
            'sk_cpns_nomor_cpns' => 'Sk Cpns Nomor Cpns',
            'sk_cpns_tanggal_cpns' => 'Sk Cpns Tanggal Cpns',
            'kode_pangkat_cpns' => 'Kode Pangkat Cpns',
            'tmt_cpns' => 'Tmt Cpns',
            'masa_kerja_tahun_cpns' => 'Masa Kerja Tahun Cpns',
            'masa_kerja_bulan_cpns' => 'Masa Kerja Bulan Cpns',
            'pejabat_yang_menetapkan_pns' => 'Pejabat Yang Menetapkan Pns',
            'sk_nomor_pns' => 'Sk Nomor Pns',
            'sk_tanggal_pns' => 'Sk Tanggal Pns',
            'kode_pangkat_pns' => 'Kode Pangkat Pns',
            'tmt_pns' => 'Tmt Pns',
            'sumpah_janji_pns' => 'Sumpah Janji Pns',
            'masa_kerja_tahun_pns' => 'Masa Kerja Tahun Pns',
            'masa_kerja_bulan_pns' => 'Masa Kerja Bulan Pns',
            'tinggi_keterangan_badan' => 'Tinggi Keterangan Badan',
            'berat_badan_keterangan_badan' => 'Berat Badan Keterangan Badan',
            'rambut_keterangan_badan' => 'Rambut Keterangan Badan',
            'bentuk_muka_keterangan_badan' => 'Bentuk Muka Keterangan Badan',
            'warna_kulit_keterangan_badan' => 'Warna Kulit Keterangan Badan',
            'ciri_ciri_khas_keterangan_badan' => 'Ciri Ciri Khas Keterangan Badan',
            'cacat_tubuh_keterangan_badan' => 'Cacat Tubuh Keterangan Badan',
            'kegemaran_1' => 'Kegemaran 1',
            'kegemaran_2' => 'Kegemaran 2',
            'kegemaran_3' => 'Kegemaran 3',
            'photo' => 'Photo',
            'status_aktif_pegawai' => 'Status Aktif Pegawai',
            'kode_kategori_pegawai' => 'Kode Kategori Pegawai',
            'kode_jenis_kepegawaian_rl4' => 'Kode Jenis Kepegawaian Rl4',
            'masa_kerja_honorer' => 'Masa Kerja Honorer',
            'tipe_user' => 'Tipe User',
        ];
    }

    // join kelurahan desa
    public function getDesa()
    {
        return $this->hasOne(MasterKelurahanDesa::className(), ['kode_prov_kab_kec_kelurahan' => 'desa_kelurahan']);
    }

    // join kecamatan
    public function getKec()
    {
        return $this->hasOne(MasterKecamatan::className(), ['kode_prov_kab_kecamatan' => 'kecamatan']);
    }
}
