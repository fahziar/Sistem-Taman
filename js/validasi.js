function Validation() {
    var Judul = document.getElementById("Judul");
	var Pengadu = document.getElementById("Pengadu");
	var Telepon = document.getElementById("Telepon");
	var Taman = document.getElementById("Taman");
	var Foto = document.getElementById("Foto");
	var Pengaduan = document.getElementByIs("Pengaduan");
	
	if (Judul.value=="")
	{
		alert('Masukkan judul pengaduan');
		return false;
	}
	
	if (Pengadu.value=="")
	{
		alert('Masukkan nama Anda');
		return false;
	}
	
	if (Telepon.value=="")
	{
		alert('Masukkan nomor telepon Anda yang bisa kami hubungi');
		return false;
	}
	
	if (Foto.value=="")
	{
		alert('Masukkan gambar taman yang Anda inginkan');
		return false;
	}
	
	if (Pengaduan.value=="")
	{
		alert('Masukkan pengaduan Anda');
		return false;
	}
	
	return true;
}

/*function resetForm(FormId){
	document.forms[FormId].reset();
}

function makeYear(Tanggal){
	var tahun = Tanggal.charAt(0) + Tanggal.charAt(1) + Tanggal.charAt(2) + Tanggal.charAt(3);
	return parseInt(tahun);
}

function makeMonth(Tanggal){
	var bulan = Tanggal.charAt(5) + Tanggal.charAt(6);
	return parseInt(bulan);
}

function makeDay(Tanggal){
	var hari = Tanggal.charAt(8) + Tanggal.charAt(9);
	return parseInt(hari);
}*/
