        <footer class="site-footer">
            <div class="be-ix-link-block">
                <?php  
                    global $be_ixf;
                    print $be_ixf->getBodyString("body_1");
                    print $be_ixf->close(); 
                ?>
                <style>
                    .be-ix-link-block{
                        padding:16px;
                        font-size:14px;
                    }
                    .be-related-link-container,.be-list{
                        display:flex;
                        flex-wrap:wrap;
                        gap:8px;
                        justify-content:center
                    }
                    @media (min-width:626px){
                        .be-related-link-container,.be-list{
                            gap:8px 16px;
                        }
                    }
                    
                </style>
            </div>

            <div class="wrapper">
                <?php if(is_active_sidebar('infootertop')){ dynamic_sidebar('infootertop'); } ?>
                <?php get_template_part( 'parts/social'); ?>
                <?php if(is_active_sidebar('infooterbottom')){ dynamic_sidebar('infooterbottom'); } ?>
            </div>
        </footer>
    </div> <!-- site-wrapper -->
    
    <div class="searchoverlay">
        <button id="searchoverlayclose" class="searchoverlayclose" aria-label="Close Search Overlay">
            <svg viewBox="0 0 48 48">
                <g>
                    <path d="M24,0C10.7,0,0,10.7,0,24s10.7,24,24,24s24-10.7,24-24S37.3,0,24,0z M38.1,32.5l-5.7,5.7L24,29.7l-8.5,8.5l-5.7-5.7
                        l8.5-8.5l-8.5-8.5l5.7-5.7l8.5,8.5l8.5-8.5l5.7,5.7L29.7,24L38.1,32.5z"/>
                </g>
            </svg>
        </button>
        <?php get_template_part( 'parts/searchform' ); ?>
    </div>

    <script type="module">
            var biJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
            (function (d, s, id, tid, vid) {
            var js, ljs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return; js = d.createElement(s); js.id = id;
            js.src = biJsHost + "cdn.listrakbi.com/scripts/script.js?m=" + tid + "&v=" + vid;
            ljs.parentNode.insertBefore(js, ljs);
            })(document, 'script', 'ltkSDK', 'JjBfgPsGkzFE', '1');
    </script>

    <script type="module">    
        (function(){if(typeof _ltk == 'object'){ltkCode();}else{(function (d) { if (document.addEventListener) document.addEventListener('ltkAsyncListener', d); else { e = document.documentElement; e.ltkAsyncProperty = 0; e.attachEvent('onpropertychange', function (e) { if (e.propertyName == 'ltkAsyncProperty') { d(); } }); } })(function(){ltkCode();});}function ltkCode(){_ltk_util.ready(function(){
            /********** Begin Custom Code **********/
            _ltk.SCA.CaptureEmail('nwsltrinpop');
            _ltk.SCA.CaptureEmail('nwsltrin');
            /********** End Custom Code ************/
        })}})();
    </script>

    <?php wp_footer(); ?>
    
</body>

</html>