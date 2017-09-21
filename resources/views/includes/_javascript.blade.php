@if($current_page == 'home')

<!-- JS Include Section -->
<script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="/js/helper.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/select2.min.js"></script>
<script type="text/javascript" src="/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/js/template.min.js"></script>

@elseif($current_page == 'rooms')

<script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="/js/helper.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/js/template.min.js"></script>

@elseif($current_page == 'restaurant' || $current_page == 'bar_and_terrace' || $current_page == 'events')

<script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="/js/helper.js"></script>
<script type="text/javascript" src="/js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/js/template.min.js"></script>

@elseif($current_page == 'contact')

<script type="text/javascript" src="/js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="/js/helper.js"></script>
<script type="text/javascript"
        src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;key=AIzaSyBFqY_VBzRTQTtzbOImGqLkJFHUwM7T-4g"></script>
<script type="text/javascript" src="/js/template.min.js"></script>
<script type="text/javascript" src="/js/jquery.validate.js"></script>

@endif