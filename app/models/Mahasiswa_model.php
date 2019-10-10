<?php 
class Mahasiswa_model {
	private $mhs = [
		[
			"nama" => "big sow",
			"nrp" => "173040012",
			"email" => "bigsow12@gmail.com",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "the rock",
			"nrp" => "173040013",
			"email" => "therock13@gmail.com",
			"jurusan" => "Teknik Industri"
		],
		[
			"nama" => "Will smith",
			"nrp" => "173040014",
			"email" => "willswhith14@gmail.com",
			"jurusan" => "Teknologi Pangan"
		],
		[
			"nama" => "sam smith",
			"nrp" => "173040015",
			"email" => "samsmith15@gmail.com",
			"jurusan" => "Teknik Mesin"
		]
	];
	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}