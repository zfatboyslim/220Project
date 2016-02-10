var edit = document.getElementById('btnedit'),
    editDialog = document.getElementById('edit-dialog')

edit.addEventListener('click', function() {
  console.log('edit!!!')
  editDialog.className = 'visible'
})
function clearDialog() {
  editDialog.className = ''
}
