const loginForm = document.getElementById('login-form');
const signupForm = document.getElementById('signup-form');

loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // validate email and password
  if (email === '' || password === '') {
    alert('Please enter your email and password');
    return;
  }

  // submit form
  // ...
});

signupForm.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const password = document.getElementById('password').value;

  // validate name, email, and password
  if (name === '' || email === '' || password === '') {
    alert('Please enter your name, email, and password');
    return;
  }

  // submit form
  // ...
});
