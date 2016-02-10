var login = document.getElementById('login'),
    guest = document.getElementById('guest'),
    signup = document.getElementById('signup'),
    signupDialog = document.getElementById('signup-dialog'),
    loginDialog = document.getElementById('login-dialog')

login.addEventListener('click', function() {
  loginDialog.className = 'dialog visible'
})
guest.addEventListener('click', function() {
  document.location.href = 'home3.php'
})
signup.addEventListener('click', function() {
  signupDialog.className = 'dialog visible'
})
function clearDialog() {
  loginDialog.className = 'dialog'
  signupDialog.className = 'dialog'
}
