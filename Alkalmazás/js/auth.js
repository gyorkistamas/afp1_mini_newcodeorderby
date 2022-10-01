const regForm = document.getElementById("register");
const pass1 = document.getElementById("pass1ForRegister");
const pass2 = document.getElementById("pass2ForRegister");
const passError = document.getElementById("invalidPass");
const passnotmatch = document.getElementById("passNotMatch");

pass1.addEventListener("input", () => {

	if (pass1.value.length < 8) {
		pass1.classList.remove("is-valid");
		pass1.classList.add("is-invalid");
		passError.hidden = false;
	}
	else {
		pass1.classList.remove("is-invalid");
		pass1.classList.add("is-valid");
		passError.hidden = true;
	}

});

pass2.addEventListener("input", (e) => {

	if (pass2.value.length < 8) {
		pass2.classList.remove("is-valid");
		pass2.classList.add("is-invalid");
	}
	else {
		pass2.classList.remove("is-invalid");
		pass2.classList.add("is-valid");
	}
	
});

pass1.addEventListener("input", checkPasswordEqual)
pass2.addEventListener("input", checkPasswordEqual);


regForm.addEventListener("submit", (e) => {
	e.preventDefault();
	if(pass1.value == pass2.value && pass1.value.length >= 8 && pass2.value.length >= 8) {
		regForm.submit();
	}
});


function checkPasswordEqual() {
	if (pass1.value != pass2.value) {
		pass2.classList.remove("is-valid");
		pass2.classList.add("is-invalid");
		passnotmatch.hidden = false;
	}
	else {
		pass2.classList.remove("is-invalid");
		pass2.classList.add("is-valid");
		passnotmatch.hidden = true;
	}
}