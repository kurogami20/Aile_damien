// fonction pour gérer la déconnexion
// On ajoute un écouteur d'événement pour le chargement du DOM
document.addEventListener("DOMContentLoaded", function () {
  // On récupère l'élément de déconnexion
  const logout = document.getElementById("logout");
  if (logout) {
    // et on ajoute un écouteur d'événement pour le clic si l'élément existe
    logout.addEventListener("click", function (e) {
      // On envoie une requête POST à logout.php pour détruire la session
      fetch("../logout.php", { method: "POST" })
        // et on redirige vers la page de connexion

        .then(() => (window.location.href = "index.php?page=connexion"));
    });
  }
});
