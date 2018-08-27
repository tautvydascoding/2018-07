<div class="modal fade" id="edit<?php echo $uzsakymas['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Jus redaguojate uzsakyma (numeriu): <?php echo $uzsakymas['id']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#" method="get">
                    <input type="hidden" name="id" value="<?php echo $uzsakymas['id']; ?>">
                    <input type="text" name="name" value="<?php echo $uzsakymas['name']; ?>" placeholder="Naujas vardas">
                    <input type="text" name="lname" value="<?php echo $uzsakymas['lname']; ?>" placeholder="Nauja pavarde">
                    <input type="text" name="email" value="<?php echo $uzsakymas['email']; ?>" placeholder="Naujas email">
                    <input type="text" name="address" value="<?php echo $uzsakymas['address']; ?>" placeholder="Naujas adresas">
                    <input type="text" name="postalcode" value="<?php echo $uzsakymas['postalcode']; ?>" placeholder="Naujas pasto kodas">
                    <input type="text" name="phone" value="<?php echo $uzsakymas['phone']; ?>" placeholder="Naujas telefono numeris">
                    <input type="text" name="comments" value="<?php echo $uzsakymas['comments']; ?>" placeholder="Naujas komentaras">
                    <input type="text" name="prekesid" value="<?php echo $uzsakymas['prekesid']; ?>" placeholder="Nauja pirkta preke (ID)">
                    <input type="hidden" name="patvirtinta" value="<?php echo $uzsakymas['patvirtinta']; ?>" placeholder="Busena (0-false,1-true)">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>
