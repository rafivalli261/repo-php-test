const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
	hamburger.classList.toggle("active");
	navMenu.classList.toggle("active");
}
let counter = 1;
setInterval(function () {
	document.getElementById("radio" + counter).checked = true;
	counter++;
	if (counter > 4) {
		counter = 1;
	}
}, 5000);

const file = document.querySelector("#foto");
file.addEventListener("change", (e) => {
	// Get the selected file
	const [file] = e.target.files;
	// Get the file name and size
	const {name: fileName, size} = file;
	// Convert size in bytes to kilo bytes
	const fileSize = (size / 1000).toFixed(2);
	// Set the text content
	const fileNameAndSize = `${fileName} - ${fileSize}KB`;
	document.querySelector(".tampil-foto").textContent = fileNameAndSize;
});
