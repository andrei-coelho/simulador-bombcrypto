<div id="back_black" class="row justify-content-center d-none" style="position:fixed; width: 100%; height: 100%; background: rgba(0,0,0,0.4)">
    <div class="col-6 mt-5" style="background-image: url('<?php image('alert_erro_bg.png'); ?>'); background-size: 100%; background-repeat: no-repeat;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" style="height: 250px;">

                </div>
                <div class="col-12">
                    <img id="btn-ok" class="d-block mx-auto" style="width: 250px;" src="<?php image("btn_ok.png") ?>">
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    const alertBlack = document.querySelector("#back_black");

    document.getElementById("btn-ok").addEventListener("click", function(e){
        e.preventDefault()
        window.location.replace("<?php url("modulo=connect") ?>");
    })

    setTimeout(() => {

        alertBlack.classList.remove('d-none')

        alertBlack.addEventListener("click", function(e){
            e.preventDefault()
            window.location.replace("<?php url("modulo=connect") ?>");
        })

    }, 1000 * 60 * 2 ); //  em 2 minutos aparecerá o alert de disconecção -> 1000 * 60 * 2

</script>