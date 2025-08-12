<?php 

// si l'utilisateur a renseigné  un email (animateur)
if (preg_match("/@/",$_POST['user'])){
session_unset();
    require_once './backend/models/dataMapper.php';

    if(isset($_POST['user']) || isset($_POST['password'])) {
    connect($_POST['user'], $_POST['password']);
    if (isset($_SESSION['login'])) {
        // Si la connexion est réussie, on redirige vers la page d'accueil
        echo "<script>window.location.href = '/index.php?page=accueil';</script>";
        exit();
    }
    }
} 
// Si l'utilisateur n'est pas un animateur, on vérifie s'il est un membre
// On vérifie si l'utilisateur est un membre via les données d'environnement renseignées dans le fichier .htaccess
elseif($_POST['user'] == getenv('MEMBER_LOGIN') && $_POST['password'] == getenv('MEMBER_PASSWD')) {
    session_unset();
    // Si l'utilisateur est un membre, on le connecte
    $_SESSION['login'] = "LOGIN6";
    require_once './views/home.php';
    exit();
} else {
    // Si l'utilisateur n'est pas un membre, on affiche un message d'erreur
    $_SESSION['login'] = null;
}


?>

<section class="flex flex-col p-4 min-[1480px]:px-40 min-[1200px]:px-20 px-2 gap-15 items-center justify-between ">
    <h2 class="text-5xl text-center capitalize font-bold">Connexion adhérent</h2>
<?php if(isset($_POST['user']) || isset($_POST['password'])) { if (!isset($_SESSION['login'])) {
    
    echo'<div role="alert" class="alert alert-error w-fit"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><span>Identifiants incorrects</span></div>';
}} ?>
    <form action="/index.php?page=connexion" method="post" class="flex flex-col gap-4 w-1/2 mx-auto  border border-[#ffbe46] rounded-lg shadow-sm  bg-white p-10 ">
    
       <h3 class="text-3xl  mb-5">Identifiez vous</h3>
        <div class="form-control">
            <label for="email" class="label ">
                <span class="label-text text-lg w">Utilisateur</span>
            </label>
            <input type="text" id="user" name="user" class="input input-bordered w-full rounded-lg" required>
          
        </div>
        <div class="form-control">
            <label for="password" class="label">
                <span class="label-text text-lg">Mot de passe</span>
            </label>
            <input type="password" id="password" name="password" class="input input-bordered w-full rounded-lg" required>
        </div>
        <div class="form-control flex  justify-end mt-5">
                        <input type="submit" id="submit" name="submit" value='Valider' class="self-end w-[200px] h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 cursor-pointer" required>
        </div>
    </form>
    <div class="flex flex-col items-center gap-5 ">
<h3 class="text-3xl  mb-1">Vous n'êtes pas adhérents ?</h3>
    <p class="text-lg">Vous pouvez adhérer à l'association en remplissant le formulaire d'adhésion.</p>

    <a href="/index.php?page=adherer" > <button type="button" class="self-end w-fit h-fit text-black bg-white hover:underline border border-2 border-[#ffbe46] font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 cursor-pointer" >Adhérer</button></a>
</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const submitButton = document.getElementById('submit');
   

    submitButton.addEventListener('click', function(event) {
        event.currentTarget.classList.add('cursor-progress');
    });
});
</script>