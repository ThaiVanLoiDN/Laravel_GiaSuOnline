<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
        </div>  
      </div>
    </div>
    <script type="text/javascript" src="{{$urlAdmin}}/js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->

    <script type="text/javascript" src="{{$urlAdmin}}/js/templatemo-script.js"></script>      <!-- Templatemo Script -->    
    <script type="text/javascript" src="{{$urlAdmin}}/js/validate.js"></script>

	<script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>	
  </body>
</html>