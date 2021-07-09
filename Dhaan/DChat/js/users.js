const searchbr = document.querySelector(".users .search input"),
searchbtn = document.querySelector(".users .search button"),
usersList = document.querySelector(".users .users-list");

searchbtn.onclick = ()=>{
	searchbr.classList.toggle("active");
	searchbr.focus();
	searchbtn.classList.toggle("active");
	searchbr.value = "";
}
searchbr.onkeyup = ()=>{
	let searchTerm = searchbr.value;
	if(searchTerm != ""){
		searchbr.classList.add("active");
	} else{
		searchbr.classList.remove("active");
	}
	let xhr = new XMLHttpRequest();
	xhr.open("POST","php/search.php",true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				usersList.innerHTML = data;
			}
		}
	}
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.send("searchTerm="+searchTerm);
}
setInterval(()=>{
	let xhr = new XMLHttpRequest();
	xhr.open("GET","php/users.php",true);
	xhr.onload = ()=>{
		if(xhr.readyState === XMLHttpRequest.DONE){
			if(xhr.status === 200){
				let data = xhr.response;
				if(!searchbr.classList.contains("active")){
					usersList.innerHTML = data;
				}
			}
		}
	}
	xhr.send();
},500);