  <div class="card  card-box">
                                <div class="card-head">
                                    <header>ONLINE DOCTORS </header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body no-padding height-9">
                                    <div class="row">
                                        <ul class="docListWindow">
                                         <?php foreach($allDoctors as $doc) { ?>  
                                            <li>
                                                <div class="prog-avatar">
                                                    <img src="<?php echo $doc->photo?>"  style="border-radius:50%;text-align:center;" alt="" width="54" height="50">
                                                </div>
                                                <div class="details">
                                                    <div class="title">
                                                        <a href="<?php echo base_url()?>patient/chat/<?php echo $doc->doctor_id;?>"><?php echo $doc->firstName;?> <?php echo $doc->lastName;?></a> -(<?php echo $doc->degree?>)
                                                    </div>
                                                        <div>
                                                            <span class="clsAvailable">
                                                                <?php
                                                if($doc->online_status==1){
                                                    echo '<span class="clsAvailable">Available</span>';
                                                }else{
                                                    echo '<span class="clsNotAvailable">Not Available</span>';
                                                }
                                                
                                                ?>
                                                            </span>
                                                        </div>
                                                </div>
                                            </li>
                                         <?php }?>
                                        </ul>
                                        <div class="text-center full-width">
                                            <a href="<?php echo base_url();?>admin/doctorList">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>