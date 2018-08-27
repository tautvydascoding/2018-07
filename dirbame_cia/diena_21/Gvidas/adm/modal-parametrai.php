<div class="modal fade" id="edit<?php echo $preke['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Jus redaguojate parametra (numeriu): <?php echo $preke['id']; ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="#" method="get">
                    <input type="hidden" name="id" value="<?php echo $preke['id']; ?>">
                    <input type="text" name="parametrai" value="<?php echo $preke['parametrai']; ?>" placeholder="Naujas parametras">
                    <input type="text" name="duomenys" value="<?php echo $preke['Duomenys']; ?>" placeholder="Nauji duomenys">
                    <input type="hidden" name="prekesid" value="<?php echo $preke['prekesid']; ?>">
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </form>
            </div>
        </div>
    </div>
</div>
