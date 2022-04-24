const submitBtn = document.getElementById('submitBtn');

const validate = (e) => {
  e.preventDefault();
  const user = document.getElementById('userId');
  const email = document.getElementById('emailId');

  const firstpassword = document.getElementById('pass1');
  const secondpassword = document.getElementById('pass2');

  if (email.value === "") {
    alert("Ju lutem shtoni Email adresen.");
    email.focus();
    return false;
  }

  if (!emailIsValid(email.value)) {
    alert("Ju lutem te shtoni email'in valid.");
    email.focus();
    return false;
  }
  if (user.value === "") {
    alert("Ju lutemi shtoni emrin e perdoruesit.");
    user.focus();
    return false;
  }      
  if (firstpassword.value==null || firstpassword.value==="") {
    alert("Ju lutem shtypni password-in.");
    firstpassword.focus();
    return false;
  }
  if (firstpassword.value.length<6) {
    alert("Password duhet ti kete te pakten 6 karaktere.");
    firstpassword.focus();
    return false;
  }
  if (secondpassword.value==null || secondpassword.value=="") {
    alert("Ju lutem konfirmoni passwordin");
    secondpassword.focus();
    return false;
  }
  if (firstpassword.value != secondpassword.value ) {
    alert("Password-at nuk ngjasojne");
    secondpassword.focus();
    return false;
  }
  alert('sukses')
  return true;
}
const emailIsValid = email => {
  return /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/.test(email.toLowerCase());
}
submitBtn.addEventListener('click', validate, Home.html)

