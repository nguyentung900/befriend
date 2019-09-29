document.addEventListener("DOMContentLoaded", function(){
	var menu = document.querySelector('.menu');
	var showCmt = document.getElementsByClassName('showCmt');
	var iconcmt = document.getElementsByClassName('iconcmt');
	
	var trangthai = 'duoi400';
	console.log(iconcmt);

	//console.log(diemcuoi);
	//01
	window.addEventListener('scroll', function(){
		//console.log(window.pageYOffset);
		var vitri = window.pageYOffset;
		if(vitri>400) {
			if(trangthai=='duoi400') {
				trangthai='tren400';
				menu.classList.add('menu2');
				
			}
		}
		else if(vitri<=400) {
			if(trangthai=='tren400') {
				trangthai='duoi400';
				menu.classList.remove('menu2');
				
			}
		}

	})

	//02
	for(var i=0; i<iconcmt.length; i++) {
		iconcmt[i].onclick = function(){
			showCmt[i].classList.toggle('showCmt2');	
		}
		console.log(i);
	}
	// iconcmt[1].onclick = function(){
	// 	showCmt[1].classList.toggle('showCmt2');	
	// }

}, false);