const passfield = document.querySelector(".form .field input[type='password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
	if (passfield.type == "password") {
		passfield.type = "text";
		toggleBtn.classList.add("active");
	} else{
		passfield.type = "password";
		toggleBtn.classList.remove("active");
	}
}