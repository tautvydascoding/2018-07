<div class="modal fade" id="edit<?php echo $img['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Jus redaguojate nuotrauka (numeriu): <?php echo $img['id']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#" method="get">
                    <input type="number" name="id" value="<?php echo $img['id']; ?>">
                    <input type="text" name="pavadinimas" value="<?php echo $img['name']; ?>" placeholder="Naujas pavadinimas">
                    <input type="text" name="pozicija" value="<?php echo $img['pozicija']; ?>" placeholder="Nauja pozicija">
                    <input type="text" name="prekesid" value="<?php echo $img['prekesid']; ?>" placeholder="Priskirimas prie prekes">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>
