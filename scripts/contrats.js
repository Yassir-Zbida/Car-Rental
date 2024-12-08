// dashbord sidebzar hide and show function

const sidebarIcon = document.getElementById('sidebarIcon');
const sidebar = document.getElementById('sidebar');

sidebarIcon.addEventListener('click', () => {
   sidebar.classList.toggle('hidden');
});

// add new contrat modal 

const addContratBtn = document.getElementById('addContratBtn');
const addContratModal = document.getElementById('addContratModal')
addContratBtn.addEventListener('click', () => {
  console.log('ffffff');
  addContratModal.classList.remove('hidden');
});

// close add new contrat modal

const closeAddContrat = document.querySelectorAll('.closeAddContrat');
closeAddContrat.forEach(button => {
   button.addEventListener('click', () => {
      addContratModal.classList.add('hidden');
   });
 });