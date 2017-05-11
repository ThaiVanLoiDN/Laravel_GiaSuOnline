<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
 ?>
       <div class="lentren">
          <a href="#" title="Về đầu trang">
              <button class="btn btn-default" aria-label="Left Align">
                  <i class="fa fa-chevron-up"></i>
              </button>
          </a>
      </div>

      <footer id="contact" class="footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 text-center">
              <p> 
                <span class="text-white">Dự án cuối khóa Lập trình PHP</span>
              </p>
               <p> 
                <span class="text-white">Trung tâm đào tạo VinaEnter.</span>
              </p>
              
            </div>
            <div class="col-sm-4">
              <div class="foot-social-icon text-center">
                <a href="https://www.facebook.com/ThaiVanLoiDN"><i class="fa fa-facebook-square"></i></a>
                <a href="https://twitter.com/ThaiVanLoiDN"><i class="fa fa-twitter"></i></a>
                <a href="https://thaivanloidn.wordpress.com"><i class="fa fa-wordpress" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/+ThaiVanLoiDN"><i class="fa fa-google-plus"></i></a>
              </div>
              <div class="copyright text-center">
                <p><span class="text-white">Code bởi: ©Thái Văn Lợi - Khóa: PHP25</span></p>
              </div>
            </div>
            <div class="col-sm-4 text-center">
              <p class="text-white"> 
                <span class="ae-u-bold">Email: </span>
                <span class="ae-u-bolder"> <a href="#0" class="rk-dark-color ">thaivanloidn@gmail.com </a></span>
              </p>
              <p class="text-white"> 
                <span class="ae-u-bold">Phone: </span><span class="ae-u-bolder"> (+84)169.8995.895</span>
              </p>
            </div>
          </div>
        </div>
      </footer><!--end footer-->
    </div>
    <script src="{{$urlPublic}}/js/select2.full.min.js"></script>
    <script src="{{$urlPublic}}/js/isotope.min.js"></script>
    <script type="text/javascript">
      $(function () {
         $(".select2").select2();
      });   

    </script>
  </body>
</html>