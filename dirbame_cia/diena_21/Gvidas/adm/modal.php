<div class="modal fade" id="edit<?php echo $preke['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Jus redaguojate preke (numeriu): <?php echo $preke['id']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#" method="get">
                    <input type="hidden" name="id" value="<?php echo $preke['id']; ?>">
                    <!-- <input type="text" name="linkas" value="<?php echo $preke['link']; ?>" placeholder="Naujas linaks"> -->
                    <input type="text" name="pavadinimas" value="<?php echo $preke['name']; ?>" placeholder="Naujas pavadinimas">
                    <input type="text" name="kaina" value="<?php echo $preke['price']; ?>" placeholder="Nauja kaina">
                    <input type="text" name="kiekis" value="<?php echo $preke['kiekis']; ?>" placeholder="Naujas kiekis">
                    <input type="text" name="pozicija" value="<?php echo $preke['pozicija']; ?>" placeholder="Nauja pozicija">
                    <textarea name="aprasymas" rows="4" cols="60" placeholder="Prekes aprasymas"><?php echo $preke['aprasymas']; ?></textarea>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>
