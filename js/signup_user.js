
function submitForm() {
  
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var repeatPassword = document.getElementById("repeat-password").value;
  
  var name = document.getElementById("name").value;

  var username = name.substring(0, 2) + email.substring(0, 2) + "u";
  alert("Your unique username is: " + username);
  // Validate form input
  if (!username || !email || !password || !repeatPassword) {
    alert("Please fill out all fields.");
    return;
  }
  
  if(password !== repeatPassword){
    alert("Password and Repeat password should be same.")
    return false;
  }
  if (!/^[a-zA-Z0-9]+$/.test(username)) {
    alert("Username must consist of alphanumeric characters only.");
    return false;
  }
  
  // var passwordStatus = document.getElementById("password-status");
  //   if(!/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[+])/.test(password)){
  //       passwordStatus.innerHTML = "password is weak";
  //       passwordStatus.style.color = "red";
  //       return false;
  //   }else{
  //       passwordStatus.innerHTML = "password is strong";
  //       passwordStatus.style.color = "green";
  //   }
  // Send form data to server
  // var xhr = new XMLHttpRequest();
  // xhr.open("POST", "signup_user.php", true);
  // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  // xhr.onreadystatechange = function() {
  //   if (xhr.readyState === 4 && xhr.status === 200) {
  //     var response = JSON.parse(xhr.responseText);
  //     if (response.success) {
  //       alert("Signup successful! Redirecting to login page...");
  //       window.location.href = "Login_user.html";
  //     } else {
  //       alert(response.message);
  //     }
  //   }
  // };
  // xhr.send("username=" + username + "&email=" + email + "&password=" + password);
  
  // return false;
}


function showpassword() {
    let pass = document.getElementById("password");
    let rpass = document.getElementById("repeat-password")
    if (pass.type === "password") {
      pass.type = "text";
    } else {
        pass.type = "password";
    }
    if (rpass.type === "password") {
        rpass.type = "text";
      } else {
        rpass.type = "password";
      }
  }