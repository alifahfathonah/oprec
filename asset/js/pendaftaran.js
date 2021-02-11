
document.addEventListener("keydown", function(e) {
	if (e.keyCode == 13) {
		toggleFullScreen();
	}
}, false);


function toggleFullScreen() {
  if (!document.fullscreenElement &&    // alternative standard method
      !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement ) {  // current working methods
  	if (document.documentElement.requestFullscreen) {
  		document.documentElement.requestFullscreen();
  	} else if (document.documentElement.msRequestFullscreen) {
  		document.documentElement.msRequestFullscreen();
  	} else if (document.documentElement.mozRequestFullScreen) {
  		document.documentElement.mozRequestFullScreen();
  	} else if (document.documentElement.webkitRequestFullscreen) {
  		document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
  	}
  } else {
  	if (document.exitFullscreen) {
  		document.exitFullscreen();
  	} else if (document.msExitFullscreen) {
  		document.msExitFullscreen();
  	} else if (document.mozCancelFullScreen) {
  		document.mozCancelFullScreen();
  	} else if (document.webkitExitFullscreen) {
  		document.webkitExitFullscreen();
  	}
  }
}

function showTime()
{
	var m_names = new Array("Januari", "Februari", "Maret",
   "April", "Mei", "Juni", "Juli", "Agustus", "September",
   "Oktober", "November", "Desember");

	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	var curr_date = today.getDate();
  var curr_month = today.getMonth();
    var curr_year = today.getFullYear(); //alert(curr_year);
	// add a zero in front of numbers<10
	h=checkTime(h);
	m=checkTime(m);
	s=checkTime(s);
	$("#tgl").text(curr_date+" "+m_names[curr_month]+" "+curr_year);
	$("#clock").text(h+":"+m+":"+s);
	t=setTimeout('showTime()',1000);
}
function checkTime(i)
{
	if (i<10)
	{
		i="0" + i;
	}
	return i;
}
showTime();


// MARQUESS TEXT
// SOURCE: http://jsfiddle.net/lalatino/1r3957g4/
window.addEventListener('load', function () {
	function go() {
		i = i < width ? i + step : 1;
		m.style.marginLeft = -i + 'px';
	}
	var i = 0,
	step = 3,
	space = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	var m = document.getElementById('marquee');
    var t = m.innerHTML; //text
    m.innerHTML = t + space;
    m.style.position = 'absolute'; // http://stackoverflow.com/questions/2057682/determine-pixel-length-of-string-in-javascript-jquery/2057789#2057789
    var width = (m.clientWidth + 1);
    m.style.position = '';
    m.innerHTML = t + space + t + space + t + space + t + space + t + space + t + space + t + space;
    m.addEventListener('mouseenter', function () {
    	step = 0;
    }, true);
    m.addEventListener('mouseleave', function () {
    	step = 3;
    }, true);
    var x = setInterval(go, 100);
  }, true);

function reloading()
{
  location.reload();
}


function pendaftaran_total()
{
  var BASE_URL = $("#base_url").val();

  $.get(BASE_URL+"index.php/welcome/pendaftaran_total/",  
   function(data){
	    		// console.log(data['total']);

          // Maksimal 30 Perhari
          var max_daptar = 30;

          total = data['total'];
          sisanyah = parseInt(max_daptar) - parseInt(total);

          $('#total').html(total);
          $('#sisanyah').html(sisanyah);

          // Pastikan Tidak Bisa Input Klo Jatah Sudah Habis
          if (sisanyah === 0) {
            $("input").attr("disabled", true);
          };
          
	    		// $('#total').text(total).css("font-weight","Bold").attr('align', 'center');
	    		// $('#kosong').text(kosong).css("font-weight","Bold").css('color', 'red').attr('align', 'center');
       }
  );
}

$(window).load(function(){
    // ambil data setiap 2seconds
    setInterval('pendaftaran_total()', 2000);
  });

$(function(){
  $("#datepicker").datepicker({format: "d-mm-yyyy"});
});

function showDialog(id){
  var dialog = $(id).data('dialog');
  dialog.open();
}


function simpan()
{
  var BASEURL = $("#base_url").val();
  $('#img').show();
  $.ajax({
    type: "POST",
    url: BASEURL+'index.php/welcome/save_mcu',
    cache: true,
    dataType: "json",              
    data: $('#online_daptar').serializeArray(),
    success: function(data){
      // alert(data.error_string);
      if (data.status) {
        swal('Terima Kasih!', 'Data Segera Diproses!', 'success' );            
      }else{
        swal('Kesalahan!', 'Tidak Boleh Kosong, harap diisi semua!', 'error' );
      }
      $('#img').hide();
    },
      // kalo kodingan error
      error:function(event, textStatus, errorThrown) {
        // $('#img').hide();
        swal('Koding!', 'Kodingan Error', 'error' );           
        //alert('Error Message: '+ textStatus + ' , HTTP Error: '+errorThrown);
      }
    });
}

function get_capcay()
{
  var BASEURL = $("#base_url").val();
  $.get(BASEURL+"index.php/welcome/reload_pertanyaan/ya",  
    function(data){
       // $('#capcay').html(data.soal);
       jQuery("#capcay").text(data.soal);
 
    }
  );
}
