// Validate Name
function validateName() {
	
	var name = document.getElementById("name").value ;
	
	if(name.length == 0) {
		
		producePrompt("Name is Required", "namePrompt", "red") ;
		return false ; 
	}
	
	if(!name.match(/^[A-Za-z']+( [A-Za-z']+)*$/)) {
	
		producePrompt("Only Alphabets Are Allowed", "namePrompt", "red") ;
		return false ;	
	}
	
	producePrompt("Valid Name", "namePrompt", "green") ;
	return true ;
}

// Validate Birthdate
function validateBirthdate() {
	
	var bday = document.getElementById("bday").value ;
	
	if(bday.length == 0) {
		
		producePrompt("Birthdate is Required", "bdayPrompt", "red") ;
		return false ; 
	}
	producePrompt("Valid", "bdayPrompt", "green") ;
	return true ; 
}

// Validate Gender
function validateGender() {
	
	var sex = document.getElementById("sex").value ;
	
	if(sex == "None") {
		
		producePrompt("Gender is Required", "sexPrompt", "red") ;
		return false ; 
	}
	
	producePrompt("Valid", "sexPrompt", "green") ;
	return true ; 
}

// Validate Contact No.
function validateMobile() {
	
	var mobile = document.getElementById("mobile").value ;
	
	if(mobile.length == 0) {
		
		producePrompt("Contact Number is Required", "mobilePrompt", "red") ;
		return false ;
	}
	
	if(!mobile.match(/^[0-9]{10}$/)) {
		
		producePrompt("Invalid Mobile Number", "mobilePrompt", "red") ;
		return false ;
	}
		
	producePrompt("Valid Mobile Number", "mobilePrompt", "green") ;
	return true;
}

// Validate City Address
function validateCity() {
	
	var city = document.getElementById("city").value ;
	
	if(city.length == 0) {
		
		producePrompt("City is Required", "cityPrompt", "red") ;
		return false ; 
	}
	
	if(!city.match(/^[A-Za-z']+( [A-Za-z']+)*$/)) {
	
		producePrompt("InValid", "cityPrompt", "red") ;
		return false ;	
	}
	
	producePrompt("Valid", "cityPrompt", "green") ;
	return true ; 
}

// Validate State
function validateState() {
	
	var state = document.getElementById("state").value ;
	
	if(state == "None") {
		
		producePrompt("State is Required", "statePrompt", "red") ;
		return false ; 
	}
	
	producePrompt("Valid", "statePrompt", "green") ;
	return true ; 
}

// Validate Country
function validateCountry() {
	
	var country = document.getElementById("country").value ;
	
	if(country == "None") {
		
		producePrompt("Country is Required", "countryPrompt", "red") ;
		return false ; 
	}
	
	producePrompt("Valid", "countryPrompt", "green") ;
	return true ; 
}

// Validate Institute
function validateInstitute() {
	
	var institute = document.getElementById("institute").value ;
	
	if(institute == "None") {
		
		producePrompt("Institute is Required", "institutePrompt", "red") ;
		return false ; 
	}
	
	producePrompt("Valid", "institutePrompt", "green") ;
	return true ; 
}

// Validate Registration No.
function validateRegistration() {
	
	var reg = document.getElementById("registration").value ;
	
	if(reg.length == 0) {
		
		producePrompt("Registration Number is Required", "registrationPrompt", "red") ;
		return false ;
	}
	
	if(!reg.match(/^[0-9]{8}$/)) {
		
		producePrompt("Invalid Registration Number", "registrationPrompt", "red") ;
		return false ;
	}
		
	producePrompt("Valid Regsitration Number", "registrationPrompt", "green") ;
	return true;
}

// Validate Course
function validateCourse() {
	
	var course = document.getElementById("course").value ;
	
	if(course == "None") {
		
		producePrompt("Course is Required", "coursePrompt", "red") ;
		return false ; 
	}
	
	producePrompt("Valid", "coursePrompt", "green") ;
	return true ; 
}

// Validate Department
function validateDepartment() {
	
	var dept = document.getElementById("department").value ;
	
	if(dept == "None") {
		
		producePrompt("Department is Required", "departmentPrompt", "red") ;
		return false ; 
	}
	
	producePrompt("Valid", "departmentPrompt", "green") ;
	return true ; 
}

// Validate Roll No.
function validateRoll() {
	
	var roll = document.getElementById("roll").value ;
	
	if(roll.length == 0) {
		
		producePrompt("Roll Number is Required", "rollPrompt", "red") ;
		return false ;
	}
	
	if(!roll.match(/^[0-9]{2}\/[A-Z][A-Z][A-Z]*\/[0-9][0-9]*$/)) {
		
		producePrompt(" Invalid Roll Number", "rollPrompt", "red") ;
		return false ;
	}
		
	producePrompt("Valid Roll Number", "rollPrompt", "green") ;
	return true;
	
}

// Validate CGPA
function validateCgpa() {
	
	var cgpa = document.getElementById("cgpa").value ;
	
	if(cgpa.length == 0) {
		
		producePrompt("CGPA is Required", "cgpaPrompt", "red") ;
		return false ;
	}
	
	if(!cgpa.match(/^([0-9]\.\d{1,2}|4\.0)$/)) {
		
		producePrompt("Invalid CGPA", "cgpaPrompt", "red") ;
		return false ;
	}
		
	producePrompt("Valid CGPA", "cgpaPrompt", "green") ;
	return true;
	
}

// Validate Email
function validateEmail() {
	
	var email = document.getElementById("email").value ;
	
	if(email.length == 0) {
		
		producePrompt("Email is Required", "emailPrompt", "red") ;
		return false ;
	}
	
	if(!email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,3}$/)) {
		
		producePrompt("Email Address Invalid", "emailPrompt", "red") ;
		return false ;
	}
	
	producePrompt("Valid Email Address", "emailPrompt", "green") ;
	return true ;
}

// Validate Password
function validatePwd() {
    
    var pwd = document.getElementById("pwd").value ;
    
    // at least one number, one lowercase and one uppercase letter
    // at least six characters
    if(pwd.length == 0) {
    	
    	producePrompt("Password is Required", "pwdPrompt", "red") ;
		return false ;
    }
    
    if(!pwd.match(/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/)) {
    	
    	producePrompt("At least One Number,One Lowercase,One Uppercase and in total Six characters", "pwdPrompt", "red") ;
		return false ;
    }
    
 	producePrompt("Strong Password", "pwdPrompt", "green") ;
	return true ;
 }
 
 // Validate Confirm Password
 function validateRepeat() {
 	
 	var pwd = document.getElementById("pwd").value ;
 	var repeat = document.getElementById("repeat").value ;
 	
 	if(repeat != pwd) {
 		
 		producePrompt("Passwords do not Match", "repeatPrompt", "red") ;
		return false ;
 	}
 	
 	producePrompt("Passwords Match", "repeatPrompt", "green") ;
	return true ;
 
 }

function validateForm() {
	
	if(!validateName() || !validateBirthdate() || !validateGender() || !validateMobile() || !validateCity() || !validateState() || !validateCountry() || !validateInstitute()
	|| !validateRegistration() || !validateCourse() || !validateDepartment() || !validateRoll() || !validateCgpa() || !validateEmail() || !validatePwd() || !validateRepeat()) {
		
		jsShow("formPrompt") ;
		producePrompt("All Fields Must Be Valid To Submit", "formPrompt", "red") ;
	
		return false;
		setTimeout(function(){jsHide("formPrompt");}, 2000) ;
		
	}
	else
		return true;
}

function jsShow(id) {
	
	document.getElementById(id).style.display = "block" ;
}

function jsHide(id) {
	
	document.getElementById(id).style.display = "none" ;
}

// Show Error
function producePrompt(message, promptLocation, color) {
	
	document.getElementById(promptLocation).innerHTML = message ;
	document.getElementById(promptLocation).style.color = color ;
}
