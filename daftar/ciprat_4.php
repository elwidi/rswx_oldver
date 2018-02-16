<html>
<head><script type='text/javascript' src='../Kasir/js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='../Kasir/js/jquery.autocomplete.js'></script>
  <link rel="stylesheet" type="text/css" href="../Kasir/css/jquery.autocomplete.css" />
  <link rel="stylesheet" type="text/css" href="../Kasir/css/custom_search.css" />
  <script language="javascript">
    $(function(){
		/*	id inputan yang akan melakukan proses autocomplete adalah "suggest"
			request data autocomplete menuju ke "search.php" */
		$('#suggest4').autocomplete('../Kasir/cari4.php', 
			{
				/*	parameter "parse" pada script ini sebenarnya adalah deklarasi ulang
					dari event parse di library jquery-autocomplete.
					fungsinya adalah untukmenghandle data yang diterima, karena data yang
					diterima adalah Ajax maka penanganannya adalah sebagai berikut: */
				parse: function(data){ 
					var parsed = [];
					for (var i=0; i < data.length; i++) {
						parsed[i] = {
							data: data[i],
							value: data[i].NoPasien // nama field yang dicari
							 // nama field yang dicari
						};
					}
					return parsed;
				},
				/*	pada parameter formatItem, kita dapat mengcustom tampilan yang akan muncul ketika 
					ada result dari hasil pencarian autocomplete, kalau formatItem ini tidak di deklarasikan
					maka hanya akan muncul berupa daftar nama yang terkesan kaku */
				formatItem: function(data,i,max){
					var str = '';
					/* 	tampilkan foto, apabila foto kosong, maka tampilkan default unknown image
						berapapun lebar foto ini, tingginya disesuaikan menjadi 50px agar tidak menghabiskan tempat */
					 
					
					/*  variable "data" merupakan variable dengan tipe json atau array assosiatif javascript 1 dimensi 
						oleh karena itu dalam mengambil setiap pada "data" hanya dengan "data.nama_property" */
str += '<u>'+data.NoPasien+'</u><br />No Telp.'+data.Telp+'<br />NAMA PASIEN: '+data.NamaPasien+'<br> Alamat'+' :'+data.Alamat+'<br>TGL LAHIR : '+data.tgllhr;;					
					str += '';
					return str;
				},
				width: 270, // panjang tampilan pencarian autocomplete yang akan muncul di bawah textbox pencarian
				dataType: 'json' // tipe data yang diterima oleh library ini disetup sebagai JSON
			}
		).result( // fungsi ini akan dipanggil setelah user memilih salah satu result pencarian autocomplete
			function(event,data,formated){
var Result =''+data.id+'';;
location.href="awas_ada_ember_pecah.php?mas=hari&id=<? echo $id; ?>&IdPasien=" + Result;
			}
		);
	});
  </script></head>
<body>

</body>
</html>