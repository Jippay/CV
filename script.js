const sidebarBox = document.querySelector('#box'),
        sidebarBtn = document.querySelector('#btn');


sidebarBtn.addEventListener('click', event => {
        sidebarBtn.classList.toggle('active');
        sidebarBox.classList.toggle('active');
});



window.addEventListener('keydown', event => {

        if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
                sidebarBtn.classList.remove('active');
                sidebarBox.classList.remove('active');
        }
});
/////
var a = document.querySelectorAll("a[href^='#']");

var duration = 800;

var i = 0,
	  l = a.length;

for (; i<l; i++) a[i].addEventListener("click", function (e){
		
		e.preventDefault();

		var scroll = function (){
			
			var progress = Math.min(1, (new Date - start) / duration);
			
			window.scrollTo(0, (to - from) * Math.pow(progress, 2) + from);
			
			(progress < 1) && window.requestAnimationFrame(scroll);
			
		}

		var start = new Date,
			  from  = window.pageYOffset,
		  	to    = document.getElementById(this.hash.substring(1)).offsetTop;
		scroll();

	}, false);