<style>
    body {
        background-color: wheat;
        background-size: cover;
    }
</style>
<script>
	$(document).ready(function() {
		$('.show-button').click(function() {
			$('.form-section').toggleClass('d-none');
			var buttonText = $('.show-button').text();
			$('.show-button').text(buttonText === 'Lanjut' ? 'Kembali' : 'Lanjut');
			$('.submit-button').toggle();
		});
		$('.submit-button').toggle();
	});
</script>
<form action="<?php echo site_url('welcome/save'); ?>" method="post">
	<div class="form-section">
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Nama Lengkap</h5>
			<input title="name" class="form-control" type="text" id="name" name="name" placeholder="Nama Lengkap" required><br><br>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5 class="form-label">Jenis Kelamin</h5>
			<div class="form-check">
				<input required class="form-check-input" type="radio" id="jk1" name="jk" value="male" required>
				<label class="form-check-label" for="jk1">Laki-laki</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type="radio" id="jk2" name="jk" value="female" required>
				<label class="form-check-label" for="jk2">Perempuan</label><br><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Usia</h5>
			<?php
			for ($i = 18; $i < 50; $i += 4) {
				$t = $i + 3;
				echo ("<div class='form-check'>");
				echo ("<input class='form-check-input' type='radio' id='usia$i' name='usia' value='$i - $t' required>
						<label class='form-check-label' for='usia$i'>$i - $t</label><br>");
				echo ("</div>");
			}
			?>
			<div class='form-check'>
				<input class='form-check-input' type='radio' id='usia50' name='usia' value='50' required>
				<label class='form-check-label' for='usia50'>> 50</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Domisili</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kota1' name='kota' value='Jakarta Pusat' required>
				<label class="form-check-label" for='kota1'>Jakarta Pusat</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kota2' name='kota' value='Jakarta Utara' required>
				<label class="form-check-label" for='kota2'>Jakarta Utara</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kota3' name='kota' value='Jakarta Timur' required>
				<label class="form-check-label" for='kota3'>Jakarta Timur</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kota4' name='kota' value='Jakarta Selatan' required>
				<label class="form-check-label" for='kota4'>Jakarta Selatan</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kota5' name='kota' value='Jakarta Barat' required>
				<label class="form-check-label" for='kota5'>Jakarta Barat</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kota6' name='kota' value='Luar Jakarta' required>
				<label class="form-check-label" for='kota6'>Luar Jakarta</label><br><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Status Tempat Tinggal</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='status1' name='tempattinggal' value='Rumah Orang Tua' required>
				<label class="form-check-label" for='status1'>Rumah Orang Tua</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='status2' name='tempattinggal' value='Rumah Sendiri' required>
				<label class="form-check-label" for='status2'>Rumah Sendiri</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='status3' name='tempattinggal' value='Kontrakan' required>
				<label class="form-check-label" for='status3'>Kontrakan</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='status4' name='tempattinggal' value='Kos-kosan' required>
				<label class="form-check-label" for='status4'>Kos-kosan</label><br><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Pendidikan Terakhir</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pen1' name='Pendidikan' value='SMP' required>
				<label class="form-check-label" for='Pen1'>SMP</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pen2' name='Pendidikan' value='SMA/SMK' required>
				<label class="form-check-label" for='Pen2'>SMA/SMK</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pen3' name='Pendidikan' value='D1-D3' required>
				<label class="form-check-label" for='Pen3'>D1-D3</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pen4' name='Pendidikan' value='S1' required>
				<label class="form-check-label" for='Pen4'>S1</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pen5' name='Pendidikan' value='S2' required>
				<label class="form-check-label" for='Pen5'>S2</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pen6' name='Pendidikan' value='S3' required>
				<label class="form-check-label" for='Pen6'>S3</label><br><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Divisi</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Div1' name='Divisi' value='SDM' required>
				<label class="form-check-label" for='Div1'>SDM</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Div2' name='Divisi' value='Keuangan' required>
				<label class="form-check-label" for='Div2'>Keuangan</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Div3' name='Divisi' value='Logistik' required>
				<label class="form-check-label" for='Div3'>Logistik</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Div4' name='Divisi' value='Marketing' required>
				<label class="form-check-label" for='Div4'>Marketing</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Div5' name='Divisi' value='Cleaning Service' required>
				<label class="form-check-label" for='Div5'>Cleaning Service</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Div6' name='Divisi' value='Security' required>
				<label class="form-check-label" for='Div6'>Security</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Div7' name='Divisi' value='Receptionis' required>
				<label class="form-check-label" for='Div7'>Receptionis</label><br><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Lama bekerja diperusahan</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='durasi0' name='LamaBekerja' value='0-1'>
				<label class="form-check-label" for='durasi0'>
					< 1 tahun</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='durasi1' name='LamaBekerja' value='1-3'>
				<label class="form-check-label" for='durasi1'>1 - 3 tahun</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='durasi3' name='LamaBekerja' value='1-3'>
				<label class="form-check-label" for='durasi3'>3 - 5 tahun</label><br>
			</div>
			<?php
			for ($i = 6; $i <= 30; $i += 5) {
				$t = $i + 4;
				echo ("<div class='form-check'>");
				echo ("<input class='form-check-input' type='radio' id='durasi$i' name='LamaBekerja' value='$i-$t'>
				<label class='form-check-label' for='durasi$i'>$i - $t tahun</label><br>");
				echo ("</div>");
			}
			?>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='durasi30' name='LamaBekerja' value='30-0'>
				<label class="form-check-label" for='durasi30'>> 30 tahun</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Status Perkawinan</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hub1' name='Perkawinan' value='Belum Menikah'>
				<label class="form-check-label" for='Hub1'>Belum Menikah</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hub2' name='Perkawinan' value='Sudah Menikah'>
				<label class="form-check-label" for='Hub2'>Sudah Menikah</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hub3' name='Perkawinan' value='Pernah'>
				<label class="form-check-label" for='Hub3'>Lainnya</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Transportasi</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kendaraan1' name='kendaraan' value='Mobil Pribadi'>
				<label class="form-check-label" for='kendaraan1'>Mobil Pribadi</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kendaraan2' name='kendaraan' value='Motor Pribadi'>
				<label class="form-check-label" for='kendaraan2'>Motor Pribadi</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kendaraan3' name='kendaraan' value='KRL'>
				<label class="form-check-label" for='kendaraan3'>KRL</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kendaraan4' name='kendaraan' value='MRT'>
				<label class="form-check-label" for='kendaraan4'>MRT</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kendaraan5' name='kendaraan' value='Transjakarta'>
				<label class="form-check-label" for='kendaraan5'>Transjakarta</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kendaraan6' name='kendaraan' value='Angkot'>
				<label class="form-check-label" for='kendaraan6'>Angkot</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='kendaraan7' name='kendaraan' value='Online'>
				<label class="form-check-label" for='kendaraan7'>Taksi Online/Ojek Online</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Hobi</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hobi1' name='Hobi' value='Olahraga'>
				<label class="form-check-label" for='Hobi1'>Olahraga</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hobi2' name='Hobi' value='Musik'>
				<label class="form-check-label" for='Hobi2'>Musik</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hobi3' name='Hobi' value='Game'>
				<label class="form-check-label" for='Hobi3'>Game</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hobi4' name='Hobi' value='Rekreasi'>
				<label class="form-check-label" for='Hobi4'>Rekreasi</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hobi5' name='Hobi' value='Masak'>
				<label class="form-check-label" for='Hobi5'>Masak</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Hobi6' name='Hobi' value='Lainnya'>
				<label class="form-check-label" for='Hobi6'>Lainnya</label><br>
			</div>
		</div>
	</div>
	<div class="form-section d-none">
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Bagaimana Anda menggambarkan keseimbangan kehidupan kerja Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert1.1' name='Pert1' value='Luar Biasa'>
				<label class="form-check-label" for='Pert1.1'>Luar Biasa - Saya dapat menjaga keseimbangan yang sehat antara pekerjaan dan kehidupan pribadi saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert1.2' name='Pert1' value='Baik'>
				<label class="form-check-label" for='Pert1.2'>Baik - Saya sangat puas dengan cara saya mengatur waktu antara pekerjaan dan keluarga.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert1.3' name='Pert1' value='Cukup'>
				<label class="form-check-label" for='Pert1.3'>Cukup - Terkadang, menyeimbangkan tanggung jawab pekerjaan dan komitmen keluarga saya bisa jadi menantang.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert1.4' name='Pert1' value='Kurang'>
				<label class="form-check-label" for='Pert1.4'>Kurang - Saya sering berjuang untuk menemukan keseimbangan antara pekerjaan dan kehidupan pribadi saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa penting bagi Anda untuk memiliki rekan kerja  yang suportif di tempat kerja?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert2.1' name='Pert2' value='Sangat penting'>
				<label class="form-check-label" for='Pert2.1'>Sangat penting - Memiliki rekan kerja yang mendukung dan memengaruhi keseimbangan kerja saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert2.2' name='Pert2' value='Lumayan penting'>
				<label class="form-check-label" for='Pert2.2'>Lumayan penting - Memiliki rekan kerja yang mendukung dan memengaruhi keseimbangan kerja saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert2.3' name='Pert2' value='Cukup penting'>
				<label class="form-check-label" for='Pert2.3'>Cukup penting - Memiliki rekan kerja yang mendukung dan memengaruhi keseimbangan kerja saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert2.4' name='Pert2' value='Tidak penting'>
				<label class="form-check-label" for='Pert2.4'>Tidak penting - Memiliki rekan kerja yang mendukung dan memengaruhi keseimbangan kerja saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa penting bagi Anda untuk memiliki Manajer yang suportif di tempat kerja?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert3.1' name='Pert3' value='Sangat penting'>
				<label class="form-check-label" for='Pert3.1'>Sangat penting - Memiliki atasan yang mendukung saya dalam bekerja dapat berpengaruhi terhadap keseimbangan kehidupan kerja.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert3.2' name='Pert3' value='Lumayan penting'>
				<label class="form-check-label" for='Pert3.2'>Lumayan penting - Memiliki atasan yang mendukung saya dalam bekerja dapat berpengaruhi terhadap keseimbangan kehidupan kerja.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert3.3' name='Pert3' value='Cukup penting'>
				<label class="form-check-label" for='Pert3.3'>Cukup penting - Memiliki atasan yang mendukung saya dalam bekerja dapat berpengaruhi terhadap keseimbangan kehidupan kerja.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert3.4' name='Pert3' value='Tidak penting'>
				<label class="form-check-label" for='Pert3.4'>Tidak penting - Memiliki atasan yang mendukung saya dalam bekerja dapat berpengaruhi terhadap keseimbangan kehidupan kerja.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Bagaimana Anda menangani konflik dalam komitmen pekerjaan Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert4.1' name='Pert4' value='Efektif'>
				<label class="form-check-label" for='Pert4.1'>Efektif - Saya sangat terampil dalam menangani konflik komitmen pekerjaan terhadap komitmen kehidupan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert4.2' name='Pert4' value='Cukup'>
				<label class="form-check-label" for='Pert4.2'>Cukup - Saya cukup terampil dalam menangani konflik komitmen pekerjaan terhadap komitmen kehidupan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert4.3' name='Pert4' value='Sulit'>
				<label class="form-check-label" for='Pert4.3'>Sulit - Saya merasa sulit dalam menangani konflik komitmen pekerjaan terhadap komitmen kehidupan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert4.4' name='Pert4' value='Kewalahan'>
				<label class="form-check-label" for='Pert4.4'>Kewalahan - Saya merasa kewalahan dan tidak berdaya ketika muncul konflik dalam pekerjaan dan kehidupan pribadi saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Bagaimana Anda menangani konflik dalam komitmen keluarga Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert5.1' name='Pert5' value='Efektif'>
				<label class="form-check-label" for='Pert5.1'>Efektif - Saya sangat terampil dalam menangani konflik komitmen pekerjaan terhadap komitmen kehidupan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert5.2' name='Pert5' value='Cukup'>
				<label class="form-check-label" for='Pert5.2'>Cukup - Saya cukup terampil dalam menangani konflik komitmen pekerjaan terhadap komitmen kehidupan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert5.3' name='Pert5' value='Sulit'>
				<label class="form-check-label" for='Pert5.3'>Sulit - Saya merasa sulit dalam menangani konflik komitmen pekerjaan terhadap komitmen kehidupan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert5.4' name='Pert5' value='Kewalahan'>
				<label class="form-check-label" for='Pert5.4'>Kewalahan - Saya merasa kewalahan dan tidak berdaya ketika muncul konflik dalam pekerjaan dan kehidupan pribadi saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa nyaman Anda mendiskusikan masalah pribadi dengan atasan Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert6.1' name='Pert6' value='Sangat nyaman'>
				<label class="form-check-label" for='Pert6.1'>Sangat nyaman - Saya tidak memiliki masalah mendiskusikan masalah pribadi dengan atasan saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert6.2' name='Pert6' value='Cukup nyaman'>
				<label class="form-check-label" for='Pert6.2'>Cukup nyaman - Saya kadang-kadang terbuka untuk berbagi masalah pribadi, tergantung pada situasinya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert6.3' name='Pert6' value='Kurang nyaman'>
				<label class="form-check-label" for='Pert6.3'>Kurang nyaman - Saya lebih suka memisahkan masalah pribadi dari kehidupan profesional saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert6.4' name='Pert6' value='Sangat tidak nyaman'>
				<label class="form-check-label" for='Pert6.4'>Sangat tidak nyaman - Saya dengan ketat menjaga batasan antara kehidupan pribadi dan profesional saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa sering Anda merasa didukung dan dihargai oleh keluarga atas pencapaian pekerjaan Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert7.1' name='Pert7' value='Selalu'>
				<label class="form-check-label" for='Pert7.1'>Selalu - Keluarga saya secara konsisten mendukung dan menghargai pencapaian pekerjaan saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert7.2' name='Pert7' value='Cukup'>
				<label class="form-check-label" for='Pert7.2'>Cukup - saya menerima dukungan dan penghargaan dari keluarga saya atas pencapaian pekerjaan saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert7.3' name='Pert7' value='Kadang-kadang'>
				<label class="form-check-label" for='Pert7.3'>Kadang-kadang - Keluarga saya menunjukkan dukungan dan penghargaan, tetapi bisa lebih sering.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert7.4' name='Pert7' value='Jarang'>
				<label class="form-check-label" for='Pert7.4'>Jarang - saya jarang menerima dukungan atau penghargaan dari keluarga saya atas pencapaian pekerjaan saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa inklusif dan beragam budaya tempat kerja Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert8.1' name='Pert8' value='Sangat inklusif'>
				<label class="form-check-label" for='Pert8.1'>Sangat inklusif dan beragam - Tempat kerja saya secara aktif dapat menghargai inklusivitas dan keragaman.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert8.2' name='Pert8' value='Cukup inklusif'>
				<label class="form-check-label" for='Pert8.2'>Cukup inklusif dan beragam - Tempat kerja saya memiliki beberapa upaya menuju inklusivitas dan keragaman.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert8.3' name='Pert8' value='Agak inklusif'>
				<label class="form-check-label" for='Pert8.3'>Agak inklusif dan beragam - Ada inisiatif sesekali, tetapi masih banyak yang bisa dilakukan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert8.4' name='Pert8' value='Tidak inklusif'>
				<label class="form-check-label" for='Pert8.4'>Tidak inklusif dan beragam - Tempat kerja saya kurang inklusif dan beragam.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa sering Anda merasakan tekanan dari kewajiban pekerjaan yang mempengaruhi waktu Anda bersama keluarga?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert9.1' name='Pert9' value='Jarang'>
				<label class="form-check-label" for='Pert9.1'>Jarang - Kewajiban kerja jarang mengganggu waktu saya bersama keluarga.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert9.2' name='Pert9' value='Terkadang'>
				<label class="form-check-label" for='Pert9.2'>Terkadang - Kewajiban kerja terkadang berdampak pada ketersediaan saya untuk waktu keluarga.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert9.3' name='Pert9' value='Sering'>
				<label class="form-check-label" for='Pert9.3'>Sering - Saya sering harus berkorban di waktu keluarga karena kewajiban pekerjaan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert9.4' name='Pert9' value='Terus-menerus'>
				<label class="form-check-label" for='Pert9.4'>Terus-menerus - Kewajiban kerja secara konsisten mendominasi waktu saya, menyisakan sedikit untuk keluarga saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa baik tempat kerja Anda mendukung kesejahteraan karyawan?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert10.1' name='Pert10' value='Luar Biasa'>
				<label class="form-check-label" for='Pert10.1'>Luar Biasa - Tempat kerja saya memprioritaskan dan memberikan dukungan kuat untuk kesejahteraan yang baik.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert10.2' name='Pert10' value='Baik'>
				<label class="form-check-label" for='Pert10.2'>Baik - Tempat kerja saya memiliki beberapa inisiatif untuk mendukung kesejahteraan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert10.3' name='Pert10' value='Cukup'>
				<label class="form-check-label" for='Pert10.3'>Cukup - Ada keterbatasan sumber daya dan dukungan untuk kesejahteraan kami.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert10.4' name='Pert10' value='Buruk'>
				<label class="form-check-label" for='Pert10.4'>Buruk - Tempat kerja saya tidak memprioritaskan atau memberikan dukungan untuk kesejahteraan.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa baik atasan Anda mendukung kesehatan mental karyawan?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert11.1' name='Pert11' value='Luar Biasa'>
				<label class="form-check-label" for='Pert11.1'>Luar Biasa - Atasan saya dapat memprioritaskan dan memberikan dukungan kuat untuk dan kesehatan mental.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert11.2' name='Pert11' value='Cukup Baik'>
				<label class="form-check-label" for='Pert11.2'>Cukup Baik - Atasan saya cukup baik dalam memberikan dukungan dalam kesehatan mental.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert11.3' name='Pert11' value='Kurang Baik'>
				<label class="form-check-label" for='Pert11.3'>Kurang Baik - Atasan saya kurang baik dalam memberikan dukungan dalam kesehatan mental.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert11.4' name='Pert11' value='Buruk'>
				<label class="form-check-label" for='Pert11.4'>Buruk - Atasan saya tidak memprioritaskan atau memberikan dukungan untuk kesehatan mental.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa baik rekan kerja Anda mendukung kesehatan mental karyawan?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert12.1' name='Pert12' value='Luar Biasa'>
				<label class="form-check-label" for='Pert12.1'>Luar Biasa - Rekan kerja saya dapat memprioritaskan dan memberikan dukungan kuat untuk dan kesehatan mental.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert12.2' name='Pert12' value='Cukup Baik'>
				<label class="form-check-label" for='Pert12.2'>Cukup Baik - Rekan kerja saya cukup baik dalam memberikan dukungan dalam kesehatan mental.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert12.3' name='Pert12' value='Kurang Baik'>
				<label class="form-check-label" for='Pert12.3'>Kurang Baik - Rekan kerja saya kurang baik dalam memberikan dukungan dalam kesehatan mental.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert12.4' name='Pert12' value='Buruk'>
				<label class="form-check-label" for='Pert12.4'>Buruk - Rekan kerja saya tidak memprioritaskan atau memberikan dukungan untuk kesehatan mental.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa baik tempat kerja Anda mendukung kesehatan mental karyawan?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert13.1' name='Pert13' value='Luar Biasa'>
				<label class="form-check-label" for='Pert13.1'>Luar Biasa - Tempat kerja saya memprioritaskan dan memberikan dukungan kuat untuk dan kesehatan mental.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert13.2' name='Pert13' value='Baik'>
				<label class="form-check-label" for='Pert13.2'>Baik - Tempat kerja saya memiliki beberapa inisiatif untuk mendukung kesehatan mental para karyawan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert13.3' name='Pert13' value='Seimbang'>
				<label class="form-check-label" for='Pert13.3'>Seimbang - Ada keterbatasan sumber daya dan dukungan untuk kesehatan mental di tempat kerja saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert13.4' name='Pert13' value='Buruk'>
				<label class="form-check-label" for='Pert13.4'>Buruk - Tempat kerja saya tidak memprioritaskan atau memberikan dukungan untuk kesehatan mental.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa sering Anda melibatkan keluarga Anda dalam diskusi terkait pekerjaan atau proses pengambilan keputusan?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert14.1' name='Pert14' value='Sering'>
				<label class="form-check-label" for='Pert14.1'>Sering - Saya secara aktif melibatkan keluarga saya dalam diskusi dan pengambilan keputusan terkait pekerjaan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert14.2' name='Pert14' value='Kadang-kadang'>
				<label class="form-check-label" for='Pert14.2'>Kadang-kadang - Bergantung pada situasinya, saya menyertakan keluarga saya dalam beberapa hal yang berhubungan dengan pekerjaan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert14.3' name='Pert14' value='Jarang'>
				<label class="form-check-label" for='Pert14.3'>Jarang - Saya jarang melibatkan keluarga saya dalam diskusi atau keputusan terkait pekerjaan.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert14.4' name='Pert14' value='Tidak pernah'>
				<label class="form-check-label" for='Pert14.4'>Tidak pernah - Saya dengan tegas memisahkan pekerjaan dan kehidupan keluarga saya, dan mereka tidak terlibat dalam aspek satu sama lain.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa puaskah Anda dengan keseluruhan integrasi kehidupan keluarga dan kehidupan kerja Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert15.1' name='Pert15' value='Sangat puas'>
				<label class="form-check-label" for='Pert15.1'>Sangat puas - Saya sangat puas dengan bagaimana kehidupan keluarga dan kehidupan kerja saya terintegrasi.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert15.2' name='Pert15' value='Puas'>
				<label class="form-check-label" for='Pert15.2'>Puas - Saya biasanya merasa puas dengan integrasi keluarga dan kehidupan kerja saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert15.3' name='Pert15' value='Netral'>
				<label class="form-check-label" for='Pert15.3'>Netral - Saya memiliki perasaan campur aduk atau tidak puas atau tidak puas dengan integrasi.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert15.4' name='Pert15' value='Tidak Puas'>
				<label class="form-check-label" for='Pert15.4'>Tidak Puas - Saya tidak puas dengan bagaimana kehidupan keluarga dan kehidupan kerja saya terintegrasi.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa penting fasilitas yang disediakan oleh perusahaan untuk keseimbangan kerja dan hobi Anda?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert16.1' name='Pert16' value='Sangat Penting'>
				<label class="form-check-label" for='Pert16.1'>Sangat Penting - Fasilitas yang diberikan dan disediakan oleh perusahaan sangat penting untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert16.2' name='Pert16' value='Lumayan Penting'>
				<label class="form-check-label" for='Pert16.2'>Lumayan Penting - Fasilitas yang diberikan dan disediakan oleh perusahaan lumayan penting untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert16.3' name='Pert16' value='Cukup Penting'>
				<label class="form-check-label" for='Pert16.3'>Cukup Penting - Fasilitas yang diberikan dan disediakan oleh perusahaan cukup penting untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert16.4' name='Pert16' value='Tidak Penting'>
				<label class="form-check-label" for='Pert16.4'>Tidak Penting - Fasilitas yang diberikan dan disediakan oleh perusahaan tidak penting untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Seberapa baik fasilitas yang disediakan oleh perusahaan untuk keseimbangan kerja dan hobi Anda?</h5>
			<div class="form-check">
				<input re19quired class="form-check-input" type='radio' id='Pert17.1' name='Pert17' value='Sangat Baik'>
				<label class="form-check-label" for='Pert17.1'>Sangat Baik - Fasilitas yang diberikan dan disediakan oleh perusahaan sangat baik untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert17.2' name='Pert17' value='Lumayan Baik'>
				<label class="form-check-label" for='Pert17.2'>Lumayan Baik - Fasilitas yang diberikan dan disediakan oleh perusahaan lumayan baik untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert17.3' name='Pert17' value='Cukup Baik'>
				<label class="form-check-label" for='Pert17.3'>Cukup Baik - Fasilitas yang diberikan dan disediakan oleh perusahaan cukup baik untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert17.4' name='Pert17' value='Tidak Baik'>
				<label class="form-check-label" for='Pert17.4'>Tidak Baik - Fasilitas yang diberikan dan disediakan oleh perusahaan tidak baik untuk keseimbangan kerja dan hobi saya.</label><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Apabila bila perusahaan ingin memberikan fasilitas untuk menjaga keseimbangan kerja dan kehidupan Anda, fasilitas apa yang Anda inginkan?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert18.1' name='Pert18' value='Olahraga'>
				<label class="form-check-label" for='Pert18.1'>Fasilitas Olahraga (Gym, Lapangan, Tenis Meja).</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert18.2' name='Pert18' value='Hiburan'>
				<label class="form-check-label" for='Pert18.2'>Fasilitas Hiburan (Rekreasi, Karaoke).</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert18.3' name='Pert18' value='Voucher'>
				<label class="form-check-label" for='Pert18.3'>Voucher Belanja Bulanan.</label><br><br>
			</div>
		</div>
		<div class="container p-3 my-4 bg-dark text-white">
			<h5>Apakah anda sudah merasa terpenuhi atas tunjangan transportasi yang diberikan oleh perusahaan?</h5>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert19.1' name='Pert19' value='Lebih'>
				<label class="form-check-label" for='Pert19.1'>Lebih.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert19.2' name='Pert19' value='Cukup'>
				<label class="form-check-label" for='Pert19.2'>Cukup.</label><br>
			</div>
			<div class="form-check">
				<input required class="form-check-input" type='radio' id='Pert19.3' name='Pert19' value='Kurang'>
				<label class="form-check-label" for='Pert19.3'>Kurang.</label><br>
			</div>
		</div>
	</div>

	<div class="container p-3 my-4 bg-dark text-white">
		<button class="btn btn-primary text-white show-button" type="button">Lanjut</button>
		<input type="submit" class="btn btn-primary submit-button" value="Kirim">
	</div>
</form>