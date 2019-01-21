      <div class="row">
              <div class="col-md-9">
                            <!-- BEGIN PROFILE SIDEBAR -->
                        
                                    <?php foreach($allDoctors as $doc) { ?>   
                            <div style="float: left;width: 223px; margin-right: 20px;">
                                <div class="card card-topline-aqua">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <img src="<?php echo $doc->photo?>" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"><?php echo $doc->firstName?> <?php echo $doc->lastName?> </div>
                                            <div class="profile-usertitle-job"> <?php echo $doc->degree?> </div>
                                        </div>
                                        <div class="profile-userbuttons">
                                            <a href="<?php echo base_url()?>patient/chat/<?php echo $doc->doctor_id?>"> <button type="button" class="btn btn-circle red btn-sm">Message</button></a>
                                           
                                        </div>
                                        <!-- END SIDEBAR BUTTONS -->
                                    </div>
                                </div>
                            </div>
                            
                            <?php }?>
                            
                                
                            
                             
                            
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                      
                        </div>   
          <div class="col-md-3">
          <?php echo $onlineDoctor?>
          </div>
                      
       </div>