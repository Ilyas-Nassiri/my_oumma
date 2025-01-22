function toggleFAQ(element) {
  const content = element.nextElementSibling; // Le contenu de la FAQ
  const closeIcon = element.querySelector('.close-icon'); // Icône de fermeture
  const openIcon = element.querySelector('.open-icon'); // Icône d'ouverture

  // Si le contenu est masqué, l'afficher et changer les icônes
  if (content.classList.contains('hidden')) {
      content.classList.remove('hidden');
      closeIcon.classList.remove('hidden');
      openIcon.classList.add('hidden');
  } else {
      content.classList.add('hidden');
      closeIcon.classList.add('hidden');
      openIcon.classList.remove('hidden');
  }
}