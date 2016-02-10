var login = document.getElementById('login'),
    guest = document.getElementById('guest'),
    signup = document.getElementById('signup'),
    signupDialog = document.getElementById('signup-dialog'),
    loginDialog = document.getElementById('login-dialog')

login.addEventListener('click', function() {
  loginDialog.className = 'dialog visible'
})
guest.addEventListener('click', function() {
  // TODO: redirect to home use window.location = url
  //console.log('go to ' + window.location.href + '/index')
  document.location.href = 'home3.php';
})
signup.addEventListener('click', function() {
  signupDialog.className = 'dialog visible'
})
function clearDialog() {
  loginDialog.className = 'dialog'
  signupDialog.className = 'dialog'
}
