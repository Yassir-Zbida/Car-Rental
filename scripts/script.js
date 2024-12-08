// dashbord sidebzar hide and show function

const sidebarIcon = document.getElementById('sidebarIcon');
const sidebar = document.getElementById('sidebar');

sidebarIcon.addEventListener('click', () => {
   sidebar.classList.toggle('hidden');
});

// add new client modal hide and show 
const closeAddClientButtons = document.querySelectorAll('.closeAddClient');
const addClientModal = document.getElementById('addClient');

closeAddClientButtons.forEach(button => {
  button.addEventListener('click', () => {
    console.log('Modal is being hidden');
    addClientModal.classList.add('hidden');
  });
});

// add new client button 
const addClientBtn = document.getElementById('addClientBtn');
addClientBtn.addEventListener('click', () => {
   addClientModal.classList.remove('hidden');
});
