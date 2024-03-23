function registerSubmit(event)
{


    const form = document.getElementById('rg-form');
    const username = document.getElementById('username');
    const email = document.getElementById('email');
    const password = document.getElementById('password');

      if (!validateUsername()) 
      {
        event.preventDefault();
      }
      if (!validateEmail()) 
      {
        event.preventDefault();
      }
      if (!validatePassword()) 
      {
        event.preventDefault();
      }
  
}

function loginSubmit(event)
{
    const form = document.getElementById('lg-form');
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    
    if (!validateUsername()) 
    {
        event.preventDefault();
    }
    if (!validatePassword()) {
        event.preventDefault();
    }

}


function validateUsername() 
{
  const value = username.value.trim();
  const error = document.getElementById('nameError');
  if (value === '') {
    error.innerHTML = "&#10033; Username is required";
    return false;
  }
  if (value.length < 6) {
    error.innerHTML = "&#10033; Username must be at least 6 characters";
    return false;
  }
  error.innerHTML = '';
  return true;
}

function validateEmail() 
{
  const value = email.value.trim();
  const error = document.getElementById('emailError');
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (value === '') {
    error.innerHTML = ' &#10033; Email is required';
    return false;
  }
  if (!emailRegex.test(value)) {
    error.innerHTML = '&#10033; Email is invalid';
    return false;
  }
  error.innerHTML = '';
  return true;
}

function validatePassword() 
{
  const value = password.value.trim();
  const error = document.getElementById('passwordError');
  if (value === '') {
    error.innerHTML = '&#10033; Password is required';
    return false;
  }
  if (value.length < 8) {
    error.innerHTML = '&#10033; Password must be at least 8 characters';
    return false;
  }
  error.innerHTML = '';
  return true;
}