
//dapatkan buttonnya
var mybutton = document.getElementById("myBtn");

// Saat pengguna mengscroll ke bawah 20px dari bagian atas dokumen, maka tunjukkan tombolnya
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		mybutton.style.display = "block";
	} else {
		mybutton.style.display = "none";
	}
}

// Saat pengguna mengklik tombol, scroll ke bagian atas dokumen
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
