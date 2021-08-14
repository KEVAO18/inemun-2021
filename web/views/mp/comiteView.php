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
        
        <div class="display-4 text-center pt-2-r pb-5-r">
            <?=$res['nombre']?>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="text-center">
                    <img class="w-70-p" src="<?=$s.'/assets/media/'.$res['foto']?>" alt="<?=$res['foto']?>">
                    <h4 class="pt-1-r px-1-r text-center text-capitalize">
                        <?php foreach ($presidentes as $presi): ?>
                            <?=$presi."<br>"?>
                        <?php endforeach ?>
                    </h4>
                    <a href="#" class="btn btn-block btn-danger mt-4" title="">Guia</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 py-2-r">
                <p class="fs-1-5 text-center"><?=$res['descripcion']?></p>
                <br>
                <h3 class="text-center">Temas</h3>
                <?php
                    for ($i=0; $i < count($temas); $i++) { 
                        ?>
                            <p class="py-1 text-center"><?=$temas[$i]?></p>
                        <?php
                    }
                ?>
                <p class="fs-1-5 text-center"></p>
            </div>
        </div>
        <?php
    }
}

?>