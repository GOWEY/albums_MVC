<?php
include("inc/header.php");

?>
    <div id="bloc_edit">
        <div id="bloc_edit_btn" class="card">
            <img id="photo_edit" class="pics card-img-top" src="<?php echo router\web('pics/', $photo['nomPh']) ?>"/>
            <div id="bloc_btn_edit">
                <a id="change_album" class="btn_edit btn btn-secondary">Changer d'album</a>
                <a class="btn_edit btn btn-danger"
                   href="<?php echo router\url("photo", "supprimer", [$photo['idPh'], $current_album]) ?>">Supprimer</a>
            </div>
        </div>
        <div id="bloc_change_album" class="hide_change_album">
            <div id="bloc_selection">
                <form name="editPhoto" action="<?= \router\url("photo","modifierAlbum",[$photo['idPh']]) ?>" method="post">
                <?php
                foreach ($albums as $album) {
                    ?>
                    <div class="input-group">
                        <div class="input-group-text">
                        <input value="<?= $album['idAlb'] ?>" type="checkbox" id="scales_<?php echo $album['idAlb'] ?>" name="scales[]" class="form-check-input mt-0">
                        </div>
                        <label class="form-control" for="scales_<?php echo $album['idAlb'] ?>"><?php echo $album['nomAlb'] ?></label>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div id="bloc_validation">
                <input type="submit" href="" id="btn_validation" class="btn btn-success" value="Valider">
            </div>
            </form>
        </div>
    </div>
<?php

print_r(\models\photo\recupIdAlbum(4));

include("inc/footer.php");
?>


