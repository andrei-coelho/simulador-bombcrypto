<?php 

    if($video == "random"){
        $videos = array_diff(scandir("videos_partidas"), array('..', '.'));
        $max    = count($videos)+1;
        $video  = $videos[mt_rand(2,$max)];
    }

?>

<div class="containe-fluid"
    style="
        background-image:url('<?php image('bg_heros.jpg') ?>');
        background-position: center top;
        height: 100%;
    "
>
    <?php include "includes/alert.php"; ?>

    <div class="row">
        <div class="col-12">
            <div class="container" style="width: 1000px;">
                <div class="row">
                    <div class="col-4">
                        <img id="btn-back" style="width: 65px; margin-top: 52px;" src="<?php image('btn_back.jpg') ?>" alt="">
                    </div>
                    
                </div>
                <div class="row p-0">
                    <div class="col-12 p-0" style="height: 520px;">
                        <video width="100%" height="520" autoplay muted>
                            <source src="<?php video($video) ?>" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    document.querySelector("#btn-back").addEventListener("click", function(e){
        e.preventDefault()
        window.location.replace("<?php url("modulo=home") ?>");
    })
</script>