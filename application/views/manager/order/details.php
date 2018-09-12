
 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         

          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Order Details</h3><br>
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('manager/order/add')?>">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Order No.</th>
                  <th>Order Table</th>
                  <th>Menu List</th>
                  <th>Quantity</th>
                  <th>Menu Price</th>  
                  <th>Discount Price</th>
                  <th>Total Price</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($records as $categories){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $categories->order_table;?></td>
                  <td><?php echo str_replace(',','<br>',$categories->order_menu);?></td>
                  <td><?php echo str_replace(',','<br>',$categories->order_quantity);?></td>
                  <td><?php echo str_replace(',','<br>',$categories->menu_price);?></td>
                  <td><?php echo str_replace(',','<br>',$categories->dis_price);?></td>
                  <td><?php echo $categories->total_price;?></td>
                  
              <?php }?>
                 </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>