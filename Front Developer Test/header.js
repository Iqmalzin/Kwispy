console.log("hellokkk");

document.getElementById("menu").addEventListener("click",openMenu);

function openMenu() {
	
	document.getElementById("dropdown").classList.toggle("active");
	document.getElementById("menu").classList.toggle("active");
}