const checkbox = document.getElementById('check-theme');
const body = document.querySelector('body');

// Récupérer la valeur actuelle du thème dans le localStorage
const savedTheme = localStorage.getItem('theme');

// Vérifier si le thème a été sauvegardé précédemment
if (savedTheme) {
  body.setAttribute('data-theme', savedTheme);
  if (savedTheme === 'light') {
    checkbox.checked = true;
  }
} else {
  body.setAttribute('data-theme', 'dark');
  localStorage.setItem('theme', 'dark');
}

// Mettre à jour le thème lorsqu'on coche/décoche la checkbox
checkbox.addEventListener('change', function() {
  if (this.checked) {
    body.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
  } else {
    body.setAttribute('data-theme', 'dark');
    localStorage.setItem('theme', 'dark');
  }
});