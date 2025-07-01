<?php 


require_once './backend/models/dataMapper.php';
if(!isset($_POST['user']) || !isset($_POST['password'])) {

}else{
connect($_POST['user'], $_POST['password']);

if (isset($_SESSION['login'])) {
    require_once './views/home.php';

    exit();
}
}

// Si la connexion est réussie, on redirige vers la page d'accueil

?>

<section>
    <h2 class="text-5xl text-center capitalize font-bold">Connexion adhérent</h2>
<?php if(isset($_POST['user']) || isset($_POST['password'])) { if (!isset($_SESSION['login'])) {
    
    echo'<div role="alert" class="alert alert-error w-fit"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg><span>Identifiants incorrects</span></div>';
}} ?>
    <form action="/index.php?page=connexion" method="post" class="flex flex-col gap-4 w-1/2 mx-auto mt-20 border p-10 rounded-lg shadow-lg bg-white relative">
       <h3 class="text-3xl bg-white mb-5">Identifiez vous</h3>
        <div class="form-control">
            <label for="email" class="label ">
                <span class="label-text text-lg w">Utilisateur</span>
            </label>
            <input type="text" id="user" name="user" class="input input-bordered w-full " required>
          
        </div>
        <div class="form-control">
            <label for="password" class="label">
                <span class="label-text text-lg">Mot de passe</span>
            </label>
            <input type="password" id="password" name="password" class="input input-bordered w-full" required>
        </div>
        <div class="form-control flex  justify-end mt-5">
                        <input type="submit" id="submit" name="submit" value='Valider' class="input input-bordered w-[25%] cursor-pointer" required>
        </div>
    </form>

</section>

<script>
   let password = "<?php echo $_SESSION;?>"
   console.log(password);
</script>