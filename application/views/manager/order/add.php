
 <?php $this->load->view('include/admin_header');?>

<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('admins/build/')?>jquery.nice-number.css">
 <?php $this->load->view('include/sidebar');?>

  <div class="content-wrapper">
   
    <section class="content">
      <div class="row">
        <div class=" col-md-12">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Order List</h3>
            </div>
            <form name="frm" action="<?php echo base_url('manager/order/orderRecords');?>" method="post">
              <div class="container">
                  <div class="row">
                    <div class="col-sm-3 col-md-3">
                      <div class="panel-group" id="accordion">
                      <?php foreach ($menuCats as $menu) {
                        ?>
                        <div class="panel panel-default">

                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $menu->Category_Name?>"><span class="glyphicon glyphicon-folder-close">&nbsp;
                                </span><?php echo ucfirst($menu->Category_Name);?></a>
                            </h4>

                          </div>
                          <?php foreach($subMenuCat as $submenu){
                            if(strtolower($menu->Category_Name)==strtolower($submenu->Brand_menu)){
                            ?>
                          <div id="<?php echo $menu->Category_Name?>" 
                             class="<?php if($menu->Category_Name=='chicken'){ echo 'panel-collapse collapse in'; }else { echo 'collapse'; }?>">
                            <ul class="list-group">
                              <li class="list-group-item"><span class="glyphicon glyphicon-pushpin text-primary"></span>&nbsp;<a href="javascript:void(0);" onclick="selectMenu('<?php echo $submenu->SN;?>')"><?php echo ucfirst($submenu->Brand_Name);?></a></li>
                            </ul>
                          </div>
                          <?php  } } ?>
                        </div>
                         <?php }?>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                          <h3 class="panel-title">Order Details</h3>
                        </div>
                        <div class="panel-body">
                          <table class="table">
                            <thead>
                              <tr>
                              <th>Table No.</th>
                                <th>Menu</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Quantity</th>
                              </tr>
                            </thead>
                            <tbody id="allRecord">
                             <td></td>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <input type="submit" name="" value="submit">
                    </div>

                  </div>
                </div>
            </form>
          </div>
        </div>
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>
<script type="text/javascript" src="<?php echo base_url('admins/build/')?>jquery.nice-number.js"></script>
<script type="text/javascript">
  function selectMenu(arg)
  {
    $.ajax({
      url: '<?php echo base_url('manager/order/selectItem/')?>'+arg,
      type: 'POST',
      data: { 'sr_no': arg },
      success:function(res){
        myObj=jQuery.parseJSON(res);
       $("#allRecord").append("<tr><td><input type='hidden' name='menu[]' value='"+myObj[0].Brand_Name+"'>"+myObj[0].Brand_Name+"</td><td><input type='hidden' name='price[]' value='"+myObj[0].Brand_price+"'>"+myObj[0].Brand_price+"</td><td><input type='hidden' name='disprice[]' value='"+myObj[0].total_price+"'>"+myObj[0].total_price+"</td><td><input type='number' name='quantity[]' value='1'></td></tr>");
      }
    });
  }

</script>
<script>
$('input[type="number"]').niceNumber();
</script>

