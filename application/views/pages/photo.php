<?php
    if (isset($_GET['nb'])){
        $nb = $_GET['nb'];
    }else{
        $nb = 1;
    }
?>
<!DOCTYPE html>
<html>
<header>
    <title>Upload_doc</title>
</header>
<body>
<form method="post" action="<?php echo base_url('welcome/do_upload/');?>" enctype="multipart/form-data">
    <!-- On limite le fichier à 100Ko -->
    <input type="hidden" name="nb" value="<?php echo $nb; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    Fichier : <input type="file" name="avatar">
    <input type="submit" value="Envoyer le fichier">
</form>
</body>
</html>