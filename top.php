<style type="text/css">
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 20px;
}

#myBtn {
	display: none;
	position: fixed;
	bottom: 20px;
	right: 30px;
	z-index: 99;
	font-size: 18px;
	border: none;
	outline: none;
	background-color: red;
	color: white;
	cursor: pointer;
	padding: 15px;
	border-radius: 4px;
}

#myBtn:hover {
	background-color: #555;
}
</style>

<body>

	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up"></i></button>

	<script>
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
</script>


</body>