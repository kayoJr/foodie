const openModalButton = document.querySelectorAll('[data-mod-target]')
const closeModalButton = document.querySelectorAll('[data-button]')
const overlays = document.getElementById('overlay')

openModalButton.forEach(button => {
button.addEventListener('click', () => {
  const modal = document.querySelector(button.dataset.modalTarget)
  openModal(modal)
})
})

overlay.addEventListener('click', () => {
const modals = document.querySelectorAll('.modal2.active')
modals.forEach(modal => {
  closeModal(modal)
})
})

closeModalButton.forEach(button => {
button.addEventListener('click', () => {
  const modal = button.closest('.modal2')
  closeModal(modal)
})
})

function openModal(modal) {
if (modal == null) return
modal.classList.add('active')
overlays.classList.add('active')
}

function closeModal(modal) {
if (modal == null) return
modal.classList.remove('active')
overlays.classList.remove('active')
}
