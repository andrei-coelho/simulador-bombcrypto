<style>
    #list-heros {
        width: 500px;
        height: 350px;
        margin-left: 70px;
        margin-top: 45px;
        overflow: auto;
    }

    #list-heros::-webkit-scrollbar {
        display: none;
    }

    #list-heros {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }

    .hero {
        background-image: url('<?php image('bg_hero.jpg') ?>');
        width: 100%;
        height: 70px;
        background-repeat: no-repeat;
    }
    .mana {
        background-image:url('<?php image('bg_mana.jpg') ?>');
        background-repeat: no-repeat;
        background-position: center center;
        height: 40px;
    }
    .innerMana {
        width: 100px;
        height: 15px;
        margin-top: 13px;
        margin-left: 18px;
    }
    .btn-close-heros {
        height: 40px;
        width: 40px;
        margin-top: 135px;
        margin-left: 515px;
        color: transparent;
    }

</style>

<div class="container-fluid" 
    style="
        background-image:url('<?php image('bg_heros.jpg') ?>');
        background-position: center top;
        height: 100%;
    ">
    <div class="row">
        <div class="col-12">
            <div class="container" style="width: 1000px;">
                <div class="row">
                    <div class="col-8">

                        <div class="row">
                            <div class="col-12">
                                <div id="btn-close" class="btn-close-heros"></div>
                            </div>
                        </div>

                        <div id="list-heros">  
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

    const list = document.getElementById('list-heros');
    list.scrollTop = 0;
    let pos = { top: 0, vertical: 0 };
    
    const mouseMoveListener = function (e) {
        let distance = e.clientY - pos.vertical;
        let top = Math.round(pos.top - distance);
        list.scrollTop = top;
    };

    const mouseUpListener = function () {
        document.removeEventListener('mousemove', mouseMoveListener, false);
        document.removeEventListener('mouseup', mouseUpListener, false);
    };

    const mouseDownListener = function (e) {
        pos = {
            top: list.scrollTop,
            vertical: e.clientY,
        };
        document.addEventListener('mousemove', mouseMoveListener);
        document.addEventListener('mouseup', mouseUpListener);
    };

    list.addEventListener("mousedown",mouseDownListener)

    document.querySelector("#btn-close").addEventListener("click", function(e){
        e.preventDefault()
        window.location.replace("<?php url("modulo=home") ?>");
    })

    const templateHero = _ => {

        let pc = Math.random() * (100 - 20) + 1;
        //let pc = 100;
        
        let tp = pc > 30 ? "<?php image('mana_green.jpg') ?>" : "<?php image('mana_red.jpg') ?>";
        let full = pc == 100 
        ? `<img class="d-block mx-auto mt-2" src="<?php image('status_full.jpg') ?>">` 
        : `<div style="width: 100%; height: 20px;"></div>`;
       
        let template = 
        `<div class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4">
                        ${full}
                    </div>
                </div>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4 mana">
                        <div class="innerMana">
                            <div style="
                                background-image:url('${tp}');
                                width: ${pc}%;
                                height: 13px;
                            "></div>
                        </div>
                    </div>
                    <div class="col-4">
                        <img style="width: 60px;" class="btn-work" src="<?php image('btn_work.jpg') ?>">
                    </div>
                </div>
            </div>
        </div>`;

        return template;

    };

    let quantHeros = 15;
    let herosHTML  = "";
    while (quantHeros > 0) {
        herosHTML += templateHero();
        quantHeros--;
    }

    list.innerHTML = herosHTML;
    document.querySelectorAll(".btn-work").forEach(btn => {
        btn.addEventListener("click", function(e){
            e.preventDefault()
            e.target.src = "<?php image('btn_workin.jpg') ?>";
        })
    });
    


</script>