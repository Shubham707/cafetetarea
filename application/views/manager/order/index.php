
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
              <a class="btn btn-primary pull-right" href="<?php echo  base_url('manager/waiter/addWaiter')?>">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Order No.</th>
                  <th>User Name</th>
                  <th>Table Order</th>
                  <th>Menu List</th>  
                  <th>Menu Price</th>
                  <th>Action</th> 
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach($order as $categories){?>
                <tr>
                  <td><?php echo $i++;?></td>
                  <td><?php echo $categories->user_name;?></td>
                  <td><?php echo $categories->order_table;?></td>
                  <td><?php echo $categories->menu_price;?></td>
                  <td><?php echo $categories->total_price;?></td>
                  <td><a class="btn btn-primary" href="<?php echo  base_url('manager/waiter/edit/').$categories->order_id;?>"><i class="fa fa-eye"></i></a>&nbsp;
                    <a class="btn btn-danger" href="<?php echo  base_url('manager/waiter/delete/').$categories->order_id;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
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