
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
                           <li><a href="index.html">Home</a></li>
                           <li><a class="active" href="#">Plans</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Subscription Plan</h1>
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
      <h3>Select Categories</h3>
      <ul style="list-style: none;">
        <?php foreach($plan as $plans){ ?>
        <li><a href="javascript:;" onclick="getValue('<?php echo $plans->Category_Name;?>');"><?php echo $plans->Category_Name;?></a></li>
      <?php }?>
      </ul>
    </div>

    <div class="col-md-5" style="background-color:lavenderblush; font-weight: bold; padding: 1em 2em;">
      <h3>Select Services</h3>
      <div id="selected"></div>   
    </div>

    <div class="col-md-4" style="background-color//:lavender; font-weight: bold; padding: 2em;">
      <p>Amount</p>
      <ol>
        
      </ol>
      <form action="<?php echo base_url('cart');?>" method="post">
      <input  type="text" id="total" name="total" value="">
      <input  type="hidden" id="bike" name="bike" value="<?php echo $bike;?>">
      <input  type="hidden" id="bike" name="service" value="<?php echo $service;?>">
       <input  type="hidden" id="plan" name="plan" value="<?php echo $plan_bike;?>"><br>
       <input type="hidden" name="name" value="<?php echo $this->session->userdata('name');?>">
       <input type="hidden" name="email" value="<?php echo $this->session->userdata('email');?>">
       <input type="hidden" name="mobile" value="<?php echo $this->session->userdata('mobile');?>">
       <input  type="submit"  name="submit" value="Pay">
     </form>
    </div>
  </div>
</div> 
     <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
     
         
      </div>
      <?php $this->load->view('include/footer');?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
        function getValue(value)
        {
          $.ajax({
              url: "<?php echo base_url();?>plan/plan_service/"+value+'/<?php echo $bike;?>',
              type: "POST",
              data: { 'name': value},
              async: false,
              cache: false,
              contentType: false,
              processData: false,
              success: function (returndata) 
              {
                document.getElementById('selected').innerHTML= returndata;    
              },
              error: function () {

              }
          });
        
        }
        function ShowModal(elem){
          var dataId = $(elem).data("id");
          var dataVal = $(elem).val();
          var total = 0;
          $("ol").append("<li>"+dataId+"   <span style=margin-left:20px;></span> "+dataVal+"</li>");
            $(':checkbox:checked').each(function () {

                total += +this.value;

            });
           $("#total").val(total+(total*0.18));
           
        }
         
     
      </script>
     