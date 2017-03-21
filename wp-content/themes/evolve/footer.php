<?php
/**
 * Template: Footer.php
 *
 * @package EvoLve
 * @subpackage Template
 */
?>
<!--END #content-->
</div>
<!--END .container-->
</div>
<!--END .content-->
</div>
<!--BEGIN .content-bottom-->
<div class="content-bottom">
    <!--END .content-bottom-->
</div>
<!--BEGIN .footer-->
<div class="footer">
    <!--BEGIN .container-->
    <div class="container container-footer">


                    <?php
                        $uri = $_SERVER['REQUEST_URI'];
                        
                        if(strpos($uri, "/en/") !== FALSE){
                            $idioma = "en";
                        }
                        else{
                            $idioma = "es";
                        }
                    ?>

                    <div class="letra-home text-center">
                        <p>

                            <?php
                                if($idioma == "es"){
                                ?>
                                    <span>Noticias</span>
                            <?php
                                }
                            ?>

                            <?php
                            if($idioma == "en"){
                            ?>                                
                                <span>News</span>
                            <?php
                                }
                            ?>
                        </p>
                    </div>


<?php 

echo do_shortcode('[pt_view id="918c41a9e8"]');

?>

        <?php
        $evolve_widgets_footer = evolve_get_option('evl_widgets_num', 'disable');
        // if Footer widgets exist
        if (($evolve_widgets_footer == "") || ($evolve_widgets_footer == "disable")) {
            
        } else {
            ?>
            <?php
            $evolve_footer_css = '';
            if ($evolve_widgets_footer == "one") {
                $evolve_footer_css = 'widget-one-column col-sm-6';
            }
            if ($evolve_widgets_footer == "two") {
                $evolve_footer_css = 'col-sm-6 col-md-6';
            }
            if ($evolve_widgets_footer == "three") {
                $evolve_footer_css = 'col-sm-6 col-md-4';
            }
            if ($evolve_widgets_footer == "four") {
                $evolve_footer_css = 'col-sm-6 col-md-3';
            }
            ?>
            <div class="footer-widgets">
			<div class="widgets-back-inside row">
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-1')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-2')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-3')) : ?>
                    <?php endif; ?>
                </div>
                <div class="<?php echo $evolve_footer_css; ?>">
                    <?php if (!dynamic_sidebar('footer-4')) : ?>
                    <?php endif; ?>
                </div>
            </div>
			</div>
        <?php } ?>
        <div class="clearfix"></div>
        <?php
        $footer_content = evolve_get_option('evl_footer_content', '<p id=\"copyright\"><span class=\"credits\"><a href=\"http://theme4press.com/evolve-multipurpose-wordpress-theme/\">evolve</a> theme by Theme4Press&nbsp;&nbsp;&bull;&nbsp;&nbsp;Powered by <a href=\"http://wordpress.org\">WordPress</a></span></p>');
        if ($footer_content === false)
            $footer_content = '';
        echo do_shortcode($footer_content);
        ?>
        <!-- Theme Hook -->
        <?php evolve_footer_hooks(); ?>
        <!--END .container-->
    </div>
    <!--END .footer-->
</div>
<!--END body-->
<?php
$evolve_pos_button = evolve_get_option('evl_pos_button', 'right');
if ($evolve_pos_button == "disable" || $evolve_pos_button == "") {
    ?>
<?php } else { ?>
    <a href="#top" id="top-link"><div id="backtotop"></div></a>
    <?php } ?>
    <?php
    $evolve_custom_background = evolve_get_option('evl_custom_background', '0');
    if ($evolve_custom_background == "1") {
        ?>
    </div>
<?php } ?>
<?php wp_footer(); ?>



    <?php
        $uri = $_SERVER['REQUEST_URI'];
        
        if(strpos($uri, "/en/") !== FALSE){
            $idioma = "en";
        }
        else{
            $idioma = "es";
        }
    ?>

    <?php
    if($idioma == "es"){
    ?>

<div class="col-lg-12 footerabajo">
                <p class="text-footer-last">© 2016 | Sitio Oficial de la Náutica en Cuba. Desarrollado por GET.</p>

                <p class="text-footer-last">Ministerio de turísmo de Cuba</p>
            </div>
<?php
    }
?>


<?php
    if($idioma == "en"){
    ?>

<div class="col-lg-12 footerabajo">
                <p class="text-footer-last">© 2016 | Official site of Nautica in Cuba. Developed by GET.</p>

                <p class="text-footer-last">Ministry of Tourism of Cuba</p>
            </div>
<?php
    }
?>

<script src="/wp-content/themes/evolve/js/leaflet-0.7.3/leaflet.js"></script>

<script type="text/javascript">


    jQuery(document).ready(function () {

        // $('.scrollspy-example').slimscroll()
//        crear mapa

        var map = L.map('map', {'attributionControl': false, 'scrollWheelZoom': false,})
                .setView([21.5, -79.5], 6.8);
        //adicionar capa de imagen
        var imageUrl = '/wp-content/themes/evolve/mapa/cubamillon.jpg',
                imageBounds = [[25.14, -86.90], [15.00, -72.20]];
        L.imageOverlay(imageUrl, imageBounds).addTo(map);

        var myIcon = L.icon({
            iconUrl: '/wp-content/themes/evolve/mapa/centro_buceo.png'
        });
        var myIcon1 = L.icon({
            iconUrl: '/wp-content/themes/evolve/mapa/ico_bases grande.png'
        });
        var myIcon2 = L.icon({
            iconUrl: '/wp-content/themes/evolve/mapa/ico_marina grande.png'
        });
        var myIcon3 = L.icon({
            iconUrl: '/wp-content/themes/evolve/mapa/TODO_Cuba copia.bmp'
        });
        //faros
        var marker = L.marker([22.60, -85.25], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/Faro_cayo_jutías.jpg"></br><p>Cayo Jutias (1902)</p>').addTo(map);
        var marker = L.marker([22.70, -84.40], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/punta gobernadora.jpg"><p>Punta Gobernadora<br/>(1902)</p>').addTo(map);
        var marker = L.marker([23.05, -83.35], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/morro.jpg"><p>Morro de La Habana<br/>(1765)</p>').addTo(map);
        var marker = L.marker([22.90, -82.15], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/Faro Punta Maya.jpg"><p>Punta Maya (1898)</p>').addTo(map);
        var marker = L.marker([22.90, -81.00], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/bahia de cadiz.JPG"><p>Cayo Bahía de Cádiz<br/>(1862)</p>').addTo(map);
        var marker = L.marker([22.40, -79.15], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/cayo caiman.jpg"><p>Cayo Caimán Grande<br/>de Santa María</br>(1909)</p>').addTo(map);
        var marker = L.marker([22.20, -78.50], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/Paredon.jpg"><p>Cayo Peredón Grande<br/>(1859)</p>').addTo(map);
        var marker = L.marker([21.10, -76.65], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/Cayo Maternillos.jpg")}}"><p>Punta Maternillos<br/>(1850)</p>').addTo(map);
        var marker = L.marker([20.35, -74.45], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/lucrecia.jpg"><p>Cabo Lucrecia (1868)</p>').addTo(map);
        var marker = L.marker([19.40, -72.80], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/maisi.jpg"><p>Maisí (1862)</p>').addTo(map);
        var marker = L.marker([18.45, -75.20], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/morro-santiago-cuba.jpg"><p>Bahía de Santiago</br> de Cuba (1842)</p>').addTo(map);
        var marker = L.marker([18.85, -77.40], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/Faro_Cabo_Cruz.jpg"><p>Cabo Cruz (1871)</p>').addTo(map);
        var marker = L.marker([20.95, -80.90], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/"><p>Punta los Colorados</p>').addTo(map);
        var marker = L.marker([20.60, -81.90], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/GuanoDelEsteCUB.jpg"><p>Cayo Guano del Este<br/>(1909)</p>').addTo(map);
        var marker = L.marker([20.30, -83.95], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/faro-carapachibey-1.jpg"><p>Carapachibey (1931)</p>').addTo(map);
        var marker = L.marker([21.00, -86.45], {icon: myIcon3}).bindPopup('<img  src = "/wp-content/themes/evolve/mapa/faros/Cabo-de-San-Antonio.jpg"><p>Cabo de San Antonio</br> (1850)</p>').addTo(map);

        //marinas
        var marker = L.marker([21.25, -86.20], {icon: myIcon2}).bindPopup('<p><a href="/marinas-turisticas/marina-cabo-de-san-antonio/">Marina Cabo de San Antonio</a></p>').addTo(map);
        var marker = L.marker([22.70, -83.70], {icon: myIcon2}).bindPopup('<p><a href="/marinas-turisticas/marlin-marina-heminguay/">Marlin Hemingway</a></p>').addTo(map);
        var marker = L.marker([22.90, -81.60], {icon: myIcon2}).bindPopup('<p><a href="/marinas-turisticas/marina-gaviota-varadero/">Gaviota Varadero</a><br/>\n\
                                                                    <a href="/marinas-turisticas/marlin-marina-darsena-varadero/">Marlin Dársenas Varadero</a><br/></p>').addTo(map);
        var marker = L.marker([20.35, -75.10], {icon: myIcon2}).bindPopup('<p><a href="/marinas-turisticas/marina-vita/">Vita</a></p>').addTo(map);
        var marker = L.marker([18.30, -75.00], {icon: myIcon2}).bindPopup('<p><a href="/marinas-turisticas/marlin-marina-santiago-de-cuba/">Marlin Santiago de Cuba</a></p>').addTo(map);
        var marker = L.marker([20.80, -80.70], {icon: myIcon2}).bindPopup('<p><a href="/marinas-turisticas/marlin-marina-cienfuegos/">Marina Cienfuegos</a></p>').addTo(map);
        var marker = L.marker([20.50, -81.75], {icon: myIcon2}).bindPopup('<p><a href="/marinas-turisticas/marlin-marina-cayo-largo/">Cayo Largo</a><br /></p>').addTo(map);

        //bases nauticas
        var marker = L.marker([22.75, -83.20], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/marlin-tarara/">Marlin Tarará</a></p>').addTo(map);
        var marker = L.marker([22.80, -81.90], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/marlin-chapelin/">Marlin Chapelin</a><br/></p>').addTo(map);
        var marker = L.marker([22.10, -79.00], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/gaviota-cayo-santa-maria/">Gaviota Cayo Santa María</a><br/></p>').addTo(map);
        // var marker = L.marker([22.00, -78.35], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/">Marlin Cayo Guillermo</a><br/></p>').addTo(map);
        var marker = L.marker([21.40, -77.35], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/marlin-santa-lucia/">Marlin Santa Lucía</a><br/></p>').addTo(map);
        var marker = L.marker([20.25, -74.80], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/marlin-guardalavaca/">Guardalavaca</a></p>').addTo(map);
        var marker = L.marker([20.45, -80.15], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/marlin-trinidad/">Marlin Trinidad</a></p>').addTo(map);
        // var marker = L.marker([21.25, -86.20], {icon: myIcon1}).bindPopup('<p><a href="/bases-nauticas/gaviota-cabo-de-san-antonio/">Gaviota Cabo de San Antonio</a><br /></p>').addTo(map);

        //centro de buceos
        var marker = L.marker([22.60, -83.40], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/la-aguja/">La Aguja</a><br/><a href="/centros-de-buceo/">Copacabana</a><br/></p>').addTo(map);
        var marker = L.marker([20.45, -82.10], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/cayo-largo/">Cayo Largo</a><br /></p>').addTo(map);
        var marker = L.marker([21.00, -80.70], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/faro-luna/">Rancho Luna</a></br>\n\
                                                                    <a href="/centros-de-buceo/guajimico/">Guajimico</a></p>').addTo(map);
        var marker = L.marker([21.10, -81.70], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/caleta-buena/">Caleta Buena</a></br>\n\
                                                                    <a href = "/centros-de-buceo/playa-giron/">Playa Girón</a></br><a href = "/centros-de-buceo/playa-larga-octopus/">Playa Larga (Octopus)</a>\n\
                                                                    </br><a href = "/centros-de-buceo/punta-perdig/">Punta Perdiz</a></p>').addTo(map);

        var marker = L.marker([18.30, -77.10], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/marea-del-portillo/">Marea del Portillo</a></p>').addTo(map);
        var marker = L.marker([20.05, -75.00], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/gaviota-playa-pesquero/">Gaviota Playa Pesquero</a></br>\n\
                                                                    <a href="/centros-de-buceo/eagle-ray/">Eagle Ray</a></p>').addTo(map);
        var marker = L.marker([20.80, -76.50], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/sharks-friends/">Shark"s Friends</a></p>').addTo(map);
        var marker = L.marker([18.45, -75.50], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/sierra-mar/">Sierramar</a></p>').addTo(map);
        var marker = L.marker([18.45, -75.00], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/santiago-de-cuba/">Santiago de Cuba</a></p>').addTo(map);
        var marker = L.marker([18.45, -74.70], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/carisol-corales/">Carisol los Corales</a></p>').addTo(map);
        var marker = L.marker([22.20, -84.85], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/cayo-levisa/">Cayo Levisa</a></p>').addTo(map);
        var marker = L.marker([20.30, -75.70], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/covarrubias/">Covarrubias</a></p>').addTo(map);
        var marker = L.marker([22.60, -81.60], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/gaviota-varadero/">Gaviota Varadero</a><br/>\n\
                                                                    <a href="/centros-de-buceo/barracuda/">Barracuda</a><br/><a href="/centros-de-buceo/chapelin/">Chapelin</a><br/></p>').addTo(map);
        var marker = L.marker([21.95, -79.20], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/gaviota-cayo-santa-maria/">Gaviota Cayo Santa María</a></p>').addTo(map);
        var marker = L.marker([21.15, -86.35], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/gaviota-cayo-san-antonio/">Gaviota Cabo de San Antonio</a></p>').addTo(map);
        var marker = L.marker([20.85, -86.00], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/gaviota-maria-la-gorda/">Gaviota María La Gorda</a></p>').addTo(map);
        var marker = L.marker([20.65, -84.10], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/el-colony/">El Colony</a></p>').addTo(map);
        var marker = L.marker([21.80, -78.50], {icon: myIcon}).bindPopup('<p><a href="/centros-de-buceo/green-moray/">Green Moray</a></br>\n\
                                                                    <a href="/centros-de-buceo/blue-diving/">Blue Diving</a></br><a href="/centros-de-buceo/coco-diving/">Coco Diving</a></br></p>').addTo(map);
    });

 </script>


</body>
<!--END html(kthxbye)-->
</html>