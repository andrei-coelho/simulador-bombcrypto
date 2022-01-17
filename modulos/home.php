<div class="container-fluid" style="
    background-image: url('<?php image('bg_home.jpg') ?>');
    background-position: top center ;
    height:100%;
">
    <div class="row">
        <div class="col-12">
            <div class="container" style="width: 1000px;">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4" style="margin-top: 205px;">
                        <img id="btn_game" class="d-block mx-auto" src="<?php image("btn_game.jpg") ?>" alt="">
                    </div>
                    <div class="col-4">
                        <img id="btn_heros"
                            src="<?php image('btn_heros.png') ?>"
                            style="
                                margin-top: 530px; 
                                margin-left: 190px;
                            "
                        >
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector("#btn_game").addEventListener("click", function (e) {
        e.preventDefault();
        window.location.replace("<?php url("modulo=game") ?>");
    })
    document.querySelector("#btn_heros").addEventListener("click", function (e) {
        e.preventDefault();
        window.location.replace("<?php url("modulo=heros") ?>");
    })
</script>