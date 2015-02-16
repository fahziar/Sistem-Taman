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
