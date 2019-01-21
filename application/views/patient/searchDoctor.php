      <div class="row">
          
              <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                               <?php if($searchDoctor){?>
                             <header style="color: #00c0ef; font-size: x-large;font-family: monospace;"> Search Doctor List </header>
                           
                               <?php foreach($searchDoctor as $doc) { ?>  
                            
                            <div style="float: left;width: 305px; margin-right: 22px;">
                                <div class="card card-topline-aqua">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <img style="    width: 173px; height: 168px;" src="<?php echo $doc->photo?>" class="img-responsive" alt=""> </div>
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
                            
                               <?php } 
                               
                               }else{
                                   echo '<h1 style="color:#e7505a; text-align:center;">No result found!</h1>'
                                   . '<h3 style="color:#e7505a; text-align:center;"> Please try again</h3>';
                               }?>
                      
                        </div>   
       
                      
       </div>

      <div class="row">
              <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                          <header style="color: #00c0ef; font-size: x-large;font-family: monospace;"> Search Related Doctor List </header>
                          <hr style="border-top: 2px solid #7b5b5b;">
                                    <?php foreach($allDoctors as $doc) { ?>   
                            
                            <div style="float: left;width: 305px; margin-right: 22px;">
                                <div class="card card-topline-aqua">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <img  src="<?php echo $doc->photo?>" class="img-responsive" alt=""> </div>
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
                      
                        </div>   
       
                      
       </div>