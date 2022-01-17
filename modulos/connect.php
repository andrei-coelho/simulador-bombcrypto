<style>
    #content-wallet {
        position:absolute;
        width: 300px;
        height: 500px;
        background-color: white;
        right: 20px;
        -webkit-box-shadow: 0px -1px 18px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px -1px 18px 0px rgba(0,0,0,0.75);
        box-shadow: 0px -1px 18px 0px rgba(0,0,0,0.75);
    }
</style>

<div id="content-wallet" class="d-none">
    <img src="<?php image("loading.gif") ?>" alt="">
</div>

<div class="container-fluid" 
    style="
        background-image: url('<?php image("bg_connect.jpg") ?>'); 
        background-position: top center;
        height: 100%;
    ">
    <div class="row">
        <div class="col-12" style="height: 500px;"></div>
        <div class="col-12">
            <img id="btn-connect" class="mx-auto d-block" src="<?php image("ic_connect.png") ?>" alt="">
        </div>
    </div>
</div>



<script>

    const wallet = document.querySelector("#content-wallet");
    const btn_connect = document.querySelector("#btn-connect");

    const wallet_template = `<div style="
        background-image: url('<?php image("bg_wallet.jpg") ?>');
        background-size: 100%;
        background-repeat:no-repeat;
    ">
        <div style="width: 100%; height: 80%;"></div>
        <img id="btn_sign" src="<?php image("btn_sign1.jpg") ?>" alt="">
    </div>`;

    btn_connect.addEventListener("click", function(e){
        e.preventDefault()
        wallet.classList.remove("d-none")
        let rand = Math.random() * (8000 - 3000) + 3000;
        setTimeout(() => {

            wallet.innerHTML = wallet_template;
            document.querySelector("#btn_sign").addEventListener("click", function(e){
                e.preventDefault()
                window.location.replace("<?php url("modulo=home") ?>");
            })

        }, rand);
    })



</script>
