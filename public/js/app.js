//change header color on load
const heroContainer = document.querySelector(".container_one");
if (!heroContainer) {
	console.log("hola");
	const header = document.querySelector("header");
	header.classList.add("signUp_header");
}

//galery carrousel
let scroll = document.querySelector(".place_container");
if (scroll) {
	scroll = scroll.clientWidth + 30;

	let nftCount = document.querySelector(".place_container").childElementCount;
	const leftArrow = document.querySelector(".auction__scroll-left");
	let nftPages = nftCount / 4;

	let parent = document.querySelector(".dots-parent");

	for (let i = 0; i <= nftPages; i++) {
		const circle = document.createElement("div");
		circle.className = "round-btn";
		const centerDot = document.createElement("div");
		centerDot.className = "center-dot";
		parent.appendChild(circle);
		circle.appendChild(centerDot);

		circle.addEventListener("click", () => {
			document.querySelector(".place_container").scroll({
				left: i * scroll,
				behavior: "smooth",
			});
		});
	}
	let allDots = document.querySelectorAll(".round-btn");
	let dot = document.querySelector(".center-dot");

	allDots.forEach((dot) => {
		dot.addEventListener("click", () => {
			allDots.forEach((dot) => {
				dot.classList.remove("dot-focus");
			});
			dot.classList.add("dot-focus");
		});
	});
	parent.firstChild.nextSibling.classList.add("dot-focus");
	dot.classList.add("active");

	document
		.querySelector(".auction__scroll-right")
		.addEventListener("click", () => {
			document.querySelector(".place_container").scrollLeft += scroll;
		});

	document
		.querySelector(".auction__scroll-left")
		.addEventListener("click", () => {
			document.querySelector(".place_container").scrollLeft -= scroll;
		});
}

//nft creation preview
const imgInp = document.querySelector(".img-input");

if (imgInp) {
	const price = document.querySelector(".nft-price");
	const name = document.querySelector(".nft-name");
	console.log(name);
	price.addEventListener("input", () => {
		const card_price = document.querySelector(".card-price");
		card_price.innerHTML = price.value;
	});
	name.addEventListener("input", () => {
		const card_name = document.querySelector(".card-name");
		card_name.textContent = name.value;
	});
	imgInp.addEventListener("change", (e) => {
		let img = document.querySelector(".preview-img");
		img.src = URL.createObjectURL(e.target.files[0]);
	});
}
