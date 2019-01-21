<div class="profile-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head card-topline-aqua">
                    <header>User Compliant</header>        <h4 style="color:green;">
                    <?php
                    $exception = $this->session->userdata('exception');
 
                    if (isset($exception)) {
                        echo $exception;
                        $this->session->unset_userdata('exception');
                    }
                    ?>
                </h4>
                </div>
                <div class="card-body no-padding height-9">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="panel">
                                    <form action="<?php echo base_url();?>patient/saveComplaint" method="post" >
                                        <textarea class="form-control p-text-area" name="complaint" rows="4" placeholder="Whats in your complaint......"></textarea>
                                    
                                    <footer class="panel-footer">
                                        <button style="    padding-right: 24px;
                                        margin-right: 15px;
                                        margin-top: 7px;
                                        width: 100px;
                                        background-color: #1b6ce6bf;
                                        color: white;
                                        text-align: center;"
                                        class="btn btn-post pull-right">Post</button>
                                        <ul class="nav nav-pills p-option">
                                            <li>
                                                <a href="#"><i class="fa fa-user"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-camera"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa  fa-location-arrow"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-meh-o"></i></a>
                                            </li>
                                        </ul>
                                    </footer>
                                   </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <ul class="activity-list">
                                     <?php foreach($complaint as $com) { ?> 
                                    <li>
                                        <div class="avatar">
                                            <img src="img/user/user5.jpg" alt="" />
                                        </div>
                                        <div class="activity-desk">
                                            <h5><a href="#"><?php echo $com->date?></a> <span style="float: right"><a href="<?php echo base_url();?>patient/deleteComplaint/<?php echo $com->complaint_id?>" class="btn btn-danger btn-xs">
					<i class="fa fa-trash-o "></i>
					</a></span></h5>
                                            <p class="text-muted">4<?php echo $com->complaint?></p>
                                        </div>
                                    </li>
                                      <?php }?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PROFILE CONTENT -->
</div>