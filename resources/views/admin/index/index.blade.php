@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>

<div class="templatemo-content-container">
	<div class="templatemo-flex-row flex-content-row">
		<div class="templatemo-content-widget white-bg col-2">
			<i class="fa fa-times"></i>
			<div class="square"></div>
			<h2 class="templatemo-inline-block">Admin</h2><hr>
			<p>Website được viết bằng Frameword Laravel</p>
			<p>Thực hiện: Thái Văn Lợi</p>
			<p>Email: thaivanloidn@gmail.com</p>
			<p>Số đt: 0169.8995.895</p>
		</div>
		<div class="templatemo-content-widget white-bg col-2">
      <i class="fa fa-times"></i>
		<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Giá trị</h2>
		<table class="table table-striped table-bordered templatemo-user-table">
			<thead>
				<tr align="center">
					<th>Tên biến</th>
					<th>Giá trị</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach ($arGiaTris as $key => $arGiaTri) {
						$tengt = $arGiaTri['tengt'];
						$gt = $arGiaTri['gt'];
				?>
				<tr>
					<td class="text-center">{{$tengt}}</td>
					<td class="text-center">{{$gt}}</td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>    
	</div> 

	</div>
	<script type="text/javascript" src="{{$urlAdmin}}/js/loader.js"></script> 
  	<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Tên", "Số lượng", { role: "style" } ],

        <?php foreach ($arDemBaiViet as $key => $arDemBV): 
            $fullname_qt = $arDemBV['fullname_qt'];
            $baiviet = $arDemBV['baiviet'];

        ?>
          

        ["{{$fullname_qt}}", {{$baiviet}}, "#333b48"],

        <?php endforeach ?>
        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
       { calc: "stringify",
         sourceColumn: 1,
         type: "string",
         role: "annotation" },
       2]);

      var options = {
        title: "Số bài viết của quản trị viên",
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  	<div class="templatemo-flex-row flex-content-row">
		<div class="templatemo-content-widget white-bg col-2">
			<i class="fa fa-times"></i>
			<div id="columnchart_values" class="templatemo-chart"></div>
		</div>
		<div class="templatemo-content-widget white-bg col-2">
			<i class="fa fa-times"></i>
			<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Thống kê</h2>
			<table class="table table-striped table-bordered templatemo-user-table">
				<thead>
					<tr align="center">
						<th>Cấp bậc</th>
						<th>Số user</th>
					</tr>
				</thead>
				<tbody>
          <?php foreach ($arDemQuanTri as $key => $arDemQT): 
              $dem = $arDemQT['dem'];
              $id_chuc = $arDemQT['id_chuc'];

              switch ($id_chuc) {
                  case '0':
                      $tenchuc = 'Mem';
                      break;
                  case '1':
                      $tenchuc = 'Mod';
                      break;
                  case '2':
                      $tenchuc = 'Smod';
                      break;
                  case '3':
                      $tenchuc = 'Admin';
                      break;
                  
                  default:
                      # code...
                      break;
              }
          ?>
              
          <tr align="center">
              <td>{{$tenchuc}}</td>
              <td>{{$dem}}</td>
          </tr>

          <?php endforeach ?>
      </tbody>
			</table>
		</div>
	</div>
	<div class="templatemo-flex-row flex-content-row">
    <div class="templatemo-content-widget white-bg col-2">
      <i class="fa fa-times"></i>
      <h2 class="text-center"></h2>
        <div id="bar_chart_div" class="templatemo-chart"></div>
    </div>
    <div class="templatemo-content-widget white-bg col-2">
      <i class="fa fa-times"></i>
      <h2 class="text-center"></h2>
            <div id="pie_chart_div" class="templatemo-chart"></div> <!-- Pie chart div -->

    </div>
  </div>
  </div>
<!-- <script src="https://www.google.com/jsapi"></script> Google Chart -->
    <script type="text/javascript" src="{{$urlAdmin}}/js/jsapi.js"></script> 
<script>
  google.load('visualization', '1.0', {'packages':['corechart']});
  google.setOnLoadCallback(drawChart); 
  
  function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Số lượng');
      data.addRows([

      	<?php foreach ($arrayThongKes as $key => $arrayThongKe): ?>

          ["{{$key}}", {{$arrayThongKe}}],

          
        <?php endforeach ?>

        
      ]);

      var options = {'title':'Số lượng'};

      var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
      barChart.draw(data, options);
  }

  $(document).ready(function(){
    if($.browser.mozilla) {
      $(window).bind('resize', function(e)
      {
        if (window.RT) clearTimeout(window.RT);
        window.RT = setTimeout(function()
        {
          this.location.reload(false);
        }, 200);
      });      
    } else {
      $(window).resize(function(){
        drawChart();
      });  
    }   
  });
  
</script>
<script type="text/javascript">
function confirmAction() {
	return confirm("Xóa chuyên mục này là xóa luôn các bài viết thuộc chuyên mục này, bạn chắc xóa chứ?")
}
</script>


<script type="text/javascript" src="{{$urlAdmin}}/js/jsapi.js"></script> 
<script>
  google.load('visualization', '1.0', {'packages':['corechart']});
  google.setOnLoadCallback(drawChart); 
  
  function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'Bài viết');
      data.addRows([

        <?php
          foreach ($arNewsAllC as $key => $valuelue) {
            $tenchuyenmuc = $valuelue['tenchuyenmuc'];
            $soluong = $valuelue['soluong'];

            if($soluong > 0){
        ?>

        ['<?php echo $tenchuyenmuc; ?>', <?php echo $soluong; ?>],

        <?php
            }
          }
        ?>

      ]);

      var options = {'title':'Số bài viết'};

      var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
      pieChart.draw(data, options);

      
  }

  $(document).ready(function(){
    if($.browser.mozilla) {
      $(window).bind('resize', function(e)
      {
        if (window.RT) clearTimeout(window.RT);
        window.RT = setTimeout(function()
        {
          this.location.reload(false);
        }, 200);
      });      
    } else {
      $(window).resize(function(){
        drawChart();
      });  
    }   
  });
  
</script>
@endsection