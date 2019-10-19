<?php wp_enqueue_script('js-organigram', get_bloginfo('template_directory').'/app.denah-psbj.js', array(), false, true); // add script ?>
<article class="page-content denah pt-3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <style>
    .hover-item {
        opacity: 0;
    }
    .hover-item:hover {
        opacity: 1;
    }
    #mapsvg {
        position: relative;
        width: 100%;
        padding-bottom: 77%;
        vertical-align: middle;
        margin: 0;
        overflow: hidden;
    }
    #mapsvg svg {
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
    }
    #mapsvg svg text {
        color: green;
    }
</style>
<h1 class="title text-center pl-1 pr-1">Denah PSBJ</h1>
<p class="text-center">Klik ruang kotak untuk menampilkan nama ruangan.</p>
<div style="align: center">
    <figure id="mapsvg">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 9000 7000" preserveAspectRatio="xMinYMin meet">
            <image width="9000" height="7000" xlink:href="<?php echo get_bloginfo('template_directory');?>/images/denah/denah-psbj.png"/>
            <g class="hover-item" target="jimusho">
                <rect x="517" y="1442" fill="rgba(255,0,0,0.2)" width="801" height="1193"></rect>
            </g>
            <g class="hover-target" display="none" id="target-jimusho">
                <text x="1400" y="1850" font-size="250">Jimusho</text>
                <text x="1400" y="2000" font-size="120">Dr. Riza Lupi Ardiati, M.Hum.</text>
                <text x="1400" y="2120" font-size="120">Risma Rismelati, M.A.</text>
                <text x="1400" y="2240" font-size="120">Pika Yestia Ginanjar, M.A., Ph.D</text>
                <text x="1400" y="2360" font-size="120">Indah Fitriani, M.Hum</text>
                <text x="1400" y="2480" font-size="120">Sigit Sugiarto, M.A</text>
            </g>
            <g class="hover-item" target="rasis1">
                <rect x="517" y="3822" fill="rgba(255,0,0,0.2)" width="801" height="600"></rect>
            </g>
            <g class="hover-target" display="none" id="target-rasis1">
                <text x="1400" y="4220" font-size="250">R. Asisten 1</text>
            </g>
            <g class="hover-item" target="rasis2">
                <rect x="517" y="4414" fill="rgba(255,0,0,0.2)" width="801" height="600"></rect>
            </g>
            <g class="hover-target" display="none" id="target-rasis2">
                <text x="1400" y="4814" font-size="250">R. Asisten 2</text>
            </g>
            <g class="hover-item" target="rasis3">
                <rect x="517" y="5006" fill="rgba(255,0,0,0.2)" width="801" height="600"></rect>
            </g>
            <g class="hover-target" display="none" id="target-rasis3">
                <text x="1400" y="5426" font-size="250">R. Asisten 3</text>
            </g>
            <g class="hover-item" target="shokudou">
                <polygon fill="rgba(255,0,0,0.2)" points="4072,3515 5272,3515 5264,4714 4092,4714 4069,4500 3916,4500 3666,4261 3666,3922 3910,3714 4072,3714"></polygon>
            </g>
            <g class="hover-target" display="none" id="target-shokudou">
                <text x="4050" y="3415" font-size="250">Shokudou</text>
            </g>
            <g class="hover-item" target="r101102">
                <rect x="2272" y="5732" fill="rgba(255,0,0,0.2)" width="1200" height="650"></rect>
            </g>
            <g class="hover-target" display="none" id="target-r101102">
                <text x="2272" y="5500" font-size="250">R. 101-102</text>
            </g>
            <g class="hover-item" target="r103">
                <rect x="3472" y="5732" fill="rgba(255,0,0,0.2)" width="600" height="650"></rect>
            </g>
            <g class="hover-target" display="none" id="target-r103">
                <text x="3410" y="5500" font-size="250">R. 103</text>
            </g>
            <g class="hover-item" target="r104">
                <rect x="4072" y="5732" fill="rgba(255,0,0,0.2)" width="600" height="650"></rect>
            </g>
            <g class="hover-target" display="none" id="target-r104">
                <text x="4010" y="5500" font-size="250">R. 104</text>
            </g>
            <g class="hover-item" target="r105">
                <rect x="4672" y="5732" fill="rgba(255,0,0,0.2)" width="600" height="650"></rect>
            </g>
            <g class="hover-target" display="none" id="target-r105">
                <text x="4610" y="5500" font-size="250">R. 105</text>
            </g>
            <g class="hover-item" target="r106">
                <rect x="5272" y="5732" fill="rgba(255,0,0,0.2)" width="600" height="650"></rect>
            </g>
            <g class="hover-target" display="none" id="target-r106">
                <text x="5130" y="5500" font-size="250">R. 106</text>
            </g>
            <g class="hover-item" target="toilet-pria">
                <rect x="5622" y="3714" fill="rgba(0,0,255,0.2)" width="350" height="800"></rect>
            </g>
            <g class="hover-target" display="none" id="target-toilet-pria">
                <text x="5700" y="5000" font-size="250">Toilet Pria</text>
            </g>
            <g class="hover-item" target="toilet-wanita">
                <rect x="5961" y="3714" fill="rgba(251,55,251,0.3)" width="350" height="800"></rect>
            </g>
            <g class="hover-target" display="none" id="target-toilet-wanita">
                <text x="5700" y="5000" font-size="250">Toilet Wanita</text>
            </g>
            <g class="hover-item" target="washitsu">
                <rect x="6311" y="3714" fill="rgba(255,0,0,0.2)" width="750" height="800"></rect>
            </g>
            <g class="hover-target" display="none" id="target-washitsu">
                <text x="6150" y="3420" font-size="250">Washitsu</text>
            </g>
            <g class="hover-item" target="bangsal">
                <rect x="7362" y="3507" fill="rgba(255,0,0,0.2)" width="700" height="1200"></rect>
            </g>
            <g class="hover-target" display="none" id="target-bangsal">
                <text x="6200" y="3420" font-size="250">Bangsal (R. 107)</text>
            </g>
        </svg>
    </figure>
</div>
</article>
