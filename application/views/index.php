
 <?php $this->load->view('include/header.php');?>

 <style type="text/css">
  
   .btn-group{ 
     padding: 0;
     margin-bottom: 20px;
    }
 </style>  
   <style type="text/css">

    .container-fluid div{
      height: 500px;
      overflow: auto;
    }

    .container-fluid div h3{
      text-align: center;
      font-weight: bold;
      text-decoration: underline;
      margin-bottom: 1em;
    }

    .container-fluid ul{
      padding: 0;
      display: block;

    }
    .container-fluid ul li{
      padding: 10px;
      transition: 0.2s;
    }

    .container-fluid ul li:hover{
      cursor: pointer;
      background-color: #999;
      border-radius: 5px;
    }


  </style>
     <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= -->
     <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class="breadcrumb-link">
                        <ul>
                           <li><a href="index.php">Home</a></li>
                           <li><a class="active" href="#">Plans</a></li>
                        </ul>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
     <div class="container-fluid">
  
  <div class="row">
    <div class="col-md-3" style="background-color:lavender; font-weight: bold; padding: 1em 2em;">
      <h3>Select Menu</h3>
      <ul style="list-style: none;">
        <?php foreach($plan as $plans){ ?>
        <li><a href="javascript:;" onclick="getValue('<?php echo $plans->Category_Name;?>');"><?php echo ucfirst($plans->Category_Name);?></a></li>
      <?php }?>
      </ul>
    </div>

    <div class="col-md-5" style="background-color:lavenderblush; font-weight: bold; padding: 1em 2em;">
      <h3>Select Services</h3>
      <div id="selecteded"></div>   
    </div>

  </div>
</div> 
     <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
     
         
      </div>
      <?php $this->load->view('include/footer');?>
      <script type="text/javascript">
        function getValue(value)
        {
        	alert(value);
         $.ajax({
              url: "<?php echo base_url();?>plan/plan_service",
              type: "POST",	
              data: { 'name': value},
              success: function (returndata) 
              {
                document.getElementById('selecteded').innerHTML=returndata;
              }
          });
        
        }
        function ShowModal(elem){
          var dataId = $(elem).data("id");
          var dataVal = $(elem).val();
          var total = 0;
          jQuery("ol").append("<li>"+dataId+"   <span style=margin-left:20px;></span> "+dataVal+"</li>");
            jQuery(':checkbox:checked').each(function () {

                total += +this.value;

            });
           jQuery("#total").val(total+(total*0.18));
           
        }
         
     
      </script>
