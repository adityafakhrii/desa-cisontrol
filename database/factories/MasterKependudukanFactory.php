<?php

namespace Database\Factories;
use App\Models\MasterKependudukan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MasterKependudukan>
 */
class MasterKependudukanFactory extends Factory
{
    protected $model = MasterKependudukan::class;

    public function definition()
    {
        return [
            'nik' => $this->faker->numerify('###############'),
            'no_kk' => '320233060606070707',
            'nama' => $this->faker->name,
            'shdk' => $this->faker->randomElement(['Kepala Keluarga', 'Istri', 'Anak']),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city,
            'tgl_lahir' => $this->faker->date(),
            'gol_darah' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
            'status_kawin' => $this->faker->randomElement(['Kawin', 'Belum Kawin']),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'pendidikan_id' => '1',
            // 'pendidikan_id' => $this->faker->numberBetween(1, 5),
            'pekerjaan_id' => '1',
            'nama_ibu' => $this->faker->name('female'),
            'nama_ayah' => $this->faker->name('male'),
            'dusun' => 'Dusun ' . $this->faker->numberBetween(1, 3),
            'rt_id' => '1',
            'rw_id' => '1',
            'kode_pos' => $this->faker->numerify('#####'),
            'alamat' => $this->faker->streetAddress,
            'desa_kelurahan' => $this->faker->city,
            'kecamatan_id' => '1',
            'kab_kota_id' => '1',
            'provinsi_id' => '1',
            'no_telp' => $this->faker->numerify(str_repeat('#', rand(10, 15))),
            'akta_kelahiran' => $this->faker->bothify('A######'),
            'nomor_akta_kawin' => $this->faker->bothify('K######'),
            'kelainan_fisik_mental' => $this->faker->randomElement(['Tidak ada', 'Rabun Jauh', 'Tidak ada']),
            'file_biodata' => $this->faker->word . '.pdf',
            'nama_kepala_keluarga' => $this->faker->name,
        ];
    }
}
