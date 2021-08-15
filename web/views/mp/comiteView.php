<?php

function comiteView($s, $id){
    include_once '../config/controllers/sqlController.php';

	$q = new sqlController();

    $r = $q->where('comites', 'id', $id);

    foreach ($r as $res) {
        $temas = explode(' - ', $res['temas']);
        $presidentes = explode(' - ', $res['presidentes']);
        $i = 0;
        ?>
        
        <div class="display-4 text-center pb-5-r">
            <?=$res['nombre']?>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="text-center">
                    <img class="w-100-p" src="<?=$s.'/assets/media/'.$res['fp']?>" alt="<?=$res['foto']?>">
                    <a href="#" class="btn btn-block btn-danger mt-4" title="">Guia</a>
                    <br>
                    <h3 class="text-center pt-1-r">Temas</h3>
                    <?php
                        for ($i=0; $i < count($temas); $i++) { 
                            ?>
                            <p class="text-center" style="font-weight: 700;">
                                <i>
                                    <?=$temas[$i]?>
                                </i>
                            </p>
                            <?php
                        }
                    ?>
                    <br>
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <p class="fs-1-5 text-justify px-2-r"><?=$res['descripcion']?></p>
            </div>
        </div>
        <?php
    }
}

?>