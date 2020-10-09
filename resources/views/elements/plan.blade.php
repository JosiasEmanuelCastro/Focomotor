<div class="col-lg-3 col-md-6 col-sm2 text-center pt-3">
    <div class="bg-primary text-white px-4 py-2 rounded-top">
        <h4>{{$plan->name}}</h4>
    </div>
    <div class="border rounded-bottom shadow">
        <p class="pt-2"><span class="font-weight-bold">$</span><span class="h1 font-weight-bold">{{$plan->price}}</span><br>por mes</p>
        <div>
            <i class="fas fa-check d-inline-block text-success"></i>
            <p class="d-inline-block small py-4">Publicar hasta {{$plan->articles_limit}} clasificados</p>
        </div>
        <p class="btn btn-outline-primary rounded-pill px-4 mb-4 focom-price-btn">Conseguir</p>

        
                    
<a mp-mode="dftl" href="http://mpago.la/2hquKnY" name="MP-payButton" class='blue-ar-l-rn-none'>Suscribirme</a>
<script type="text/javascript">
    (function() {
        function $MPC_load() {
            window.$MPC_loaded !== true && (function() {
                var s = document.createElement("script");
                s.type = "text/javascript";
                s.async = true;
                s.src = document.location.protocol + "//secure.mlstatic.com/mptools/render.js";
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
                window.$MPC_loaded = true;
            })();
        }
        window.$MPC_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;
    })();
</script>

                
    </div>
</div>