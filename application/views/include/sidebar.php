 <?php if($this->session->userdata('manager_in')==true){?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class=" treeview">
          <a href="<?php echo base_url('Managers')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/users');?>"><i class="fa fa-circle-o"></i> Listing</a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/brand');?>"><i class="fa fa-circle-o"></i> Menu Listing</a></li>
            
            <li><a href="<?php echo base_url('manager/category');?>"><i class="fa fa-circle-o"></i> Menu Category Listing</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Restaurant Table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li><a href="<?php echo base_url('manager/service');?>"><i class="fa fa-circle-o"></i> Table List</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('manager/payment');?>"><i class="fa fa-circle-o"></i> Payment Listing</a></li>
          </ul>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php }?>
  <!-- Admin Dashboard -->
   <?php if($this->session->userdata('admin_in')==true){?>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>admins/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class=" treeview">
          <a href="<?php echo base_url('admin/dashboard')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/users');?>"><i class="fa fa-circle-o"></i> Listing</a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/brand');?>"><i class="fa fa-circle-o"></i> Menu Listing</a></li>
            <!-- <li><a href="<?php echo base_url('admin/category/classification');?>"><i class="fa fa-circle-o"></i> Category Classification</a></li> -->
            <li><a href="<?php echo base_url('admin/category');?>"><i class="fa fa-circle-o"></i> Menu Category Listing</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Service Table</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li><a href="<?php echo base_url('admin/price');?>"><i class="fa fa-circle-o"></i> Price List</a></li> -->
            <li><a href="<?php echo base_url('admin/service');?>"><i class="fa fa-circle-o"></i> Table List</a></li>
          </ul>
        </li> 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/payment');?>"><i class="fa fa-circle-o"></i> Payment Listing</a></li>
          </ul>
        </li>
        
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <?php }?>