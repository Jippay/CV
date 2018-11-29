///menu burger animation//
const sidebarBox = document.querySelector('#box'),
	sidebarBtf = document.querySelector('#boutonFond'),
        sidebarBtn = document.querySelector('#btn');
	btnTop = document.querySelector('#myBtn');

sidebarBtn.addEventListener('click', event => {
	sidebarBtn.classList.toggle('active');
	sidebarBtf.classList.toggle('active');
        sidebarBox.classList.toggle('active');
});

btnTop.addEventListener('click', event => {

        if (sidebarBox.classList.contains('active')) {
                sidebarBtn.classList.remove('active');
		sidebarBox.classList.remove('active');
		sidebarBtf.classList.remove('active');
        }
});


window.addEventListener('keydown', event => {

        if (sidebarBox.classList.contains('active') && event.keyCode === 27) {
		sidebarBtn.classList.remove('active');
		sidebarBtf.classList.remove('active');
                sidebarBox.classList.remove('active');
        }
});


/**Bouton retour en haut */

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
/*
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} */


/////mouvement scroll fluide////
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
