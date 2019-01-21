      <div class="row">
          <div class="col-md-1 col-sm-12"></div>
                        <div class="col-md-10 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>REGISTRATION REQUEST  PATIENT LIST</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row table-padding">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="btn-group">
                                                 <a href="book_appointment_material.html" id="addRow" class="btn btn-info">
                                                    Add New Patient <i class="fa fa-plus"></i>
                                                </a> 
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="btn-group pull-right">
                                               <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-print"></i> Print </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;">
                                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="example4">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                              
                                                <th>Image</th>
                                                 <th>Patient Name</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                 <th>Phone</th>
                                                <th>Date</th>
                                                <th>Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php foreach($allPatients as $pat) {
                                                 if($pat->reg_status==0){
                                                 ?>   
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="center">
                                                     <div class="prog-avatar">
                                                    <img src="<?php echo $pat->photo;?>" style="border-radius:50%;" alt="" width="50" height="50">
                                                </div>
                                                </td>
                                                <td> <?php echo $pat->name;?> </td>
                                                <td class="center"><?php echo $pat->email;?></td>
                                                <td class="center"><?php echo $pat->address;?></td>
                                                <td class="center"><?php echo $pat->phone;?></td>
                                                <td class="center"><?php echo $pat->date;?></td>
                                                
                                                
                                                <td class="center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-warning dropdown-toggle center no-margin" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                              <li>
                                                                <a href="<?php echo base_url();?>admin/patientConfirmation/<?php echo $pat->patient_id;?>"><i class="fa fa-trash-o"></i> Confirm </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url();?>admin/patientCancel/<?php echo $pat->patient_id;?>"><i class="fa fa-ban"></i> Cancel </a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo base_url();?>admin/requestPatient"><i class="fa fa-clock-o"></i> Pending </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                                 <?php } }?>
                                           
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                  <div class="col-md-1 col-sm-12"></div>  
                    </div>