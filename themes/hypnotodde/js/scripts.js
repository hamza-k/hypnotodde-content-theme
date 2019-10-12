var searchActive = 0
function searchAction(){
	if (!searchActive) {
		document.querySelector('.search-item.search').classList.add("active")
	} else {
		document.querySelector('.search-item.search').classList.remove("active")
	}
	searchActive = !searchActive
}

var menuActive = 0
function menuAction() {
	if (!menuActive) {
		document.getElementById('burger').classList.add("active")
		document.querySelector('.head-container').classList.add("active")
	} else {
		document.getElementById('burger').classList.remove("active")
		document.querySelector('.head-container').classList.remove("active")
	}
	menuActive = !menuActive
}