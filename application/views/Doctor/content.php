  <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                           <?php foreach($doctorInfo as $info) { ?> 
                            <div class="profile-sidebar">
                                <div class="card card-topline-aqua">
                                    <div class="card-body no-padding height-9">
                                        <div class="row">
                                            <div class="profile-userpic">
                                                <img src="<?php echo $info->photo?>" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="profile-usertitle-name"><?php echo $info->firstName?> <?php echo $info->lastName?></div>
                                            <div class="profile-usertitle-job"> <?php echo $info->degree?> </div>
                                        </div>
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b style="color:#71405b; ">Total Patient</b> <a style="color:#71405b; " class="pull-right">200</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b style="color:#71405b; ">Appointment</b> <a style="color:#71405b; " class="pull-right">50</a>
                                            </li>
                                            
                                        </ul>
                                        <!-- END SIDEBAR USER TITLE -->
                                        <!-- SIDEBAR BUTTONS -->
                                        <div class="profile-userbuttons">
                                            <button type="button" class="btn btn-circle green btn-sm">List</button>
                                        </div>
                                        <!-- END SIDEBAR BUTTONS -->
                                    </div>
                                </div>
                                 <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>Educational Information</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <ul class="performance-list">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-circle-o" style="color:#F39C12;"></i> Registration Number <span class="pull-right"><?php echo $info->regNumber?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-circle-o" style="color:#DD4B39;"></i> Specialist Area<span class="pull-right"><?php echo $info->degree?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-circle-o" style="color:#00A65A;"></i> Passing Year <span class="pull-right"> <?php echo $info->passYear?></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>About Me</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="profile-desc"  style="color:#71405b; ">
                                            Hello I am <?php echo $info->firstName?> <?php echo $info->lastName?> a doctor.I have completed my MBBS form Dhaka Medical Collage.
                                        </div>
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item">
                                                <b style="color:#71405b; ">Email </b>
                                                <div class="profile-desc-item pull-right"><?php echo $info->email?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b style="color:#71405b; ">Phone </b>
                                                <div class="profile-desc-item pull-right"><?php echo $info->phone?></div>
                                            </li>
                                             <li class="list-group-item">
                                                <b style="color:#71405b; ">Chamber Address</b>
                                                <div class="profile-desc-item pull-right"><?php echo $info->chamAddress?></div>
                                            </li>
                                            <li class="list-group-item">
                                                <b style="color:#71405b; ">Address</b>
                                                <div class="profile-desc-item pull-right"><?php echo $info->address?></div>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                               
                                <div class="card">
                                    <div class="card-head card-topline-aqua">
                                        <header>Work Progress</header>
                                    </div>
                                    <div class="card-body no-padding height-9">
                                        <div class="work-monitor work-progress">
                                            <div class="states">
                                                <div class="info">
                                                    <div class="desc pull-left">Operations</div>
                                                    <div class="percent pull-right">80%</div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                        <span class="sr-only">80% </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="states">
                                                <div class="info">
                                                    <div class="desc pull-left">Consultation</div>
                                                    <div class="percent pull-right">55%</div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                        <span class="sr-only">55% </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="states">
                                                <div class="info">
                                                    <div class="desc pull-left">Support</div>
                                                    <div class="percent pull-right">20%</div>
                                                </div>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                                        <span class="sr-only">20% </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php } ?>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-head card-topline-aqua">
                                                <header>User Activity</header>
                                            </div>
                                            <div class="card-body no-padding height-9">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="panel">
                                                                <form>
                                                                    <textarea class="form-control p-text-area" rows="4" placeholder="Whats in your mind today?"></textarea>
                                                                </form>
                                                                <footer class="panel-footer">
                                                                    <button class="btn btn-post pull-right">Post</button>
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <ul class="activity-list">
                                                                <li>
                                                                    <div class="avatar">
                                                                        <img src="img/user/user1.jpg" alt="" />
                                                                    </div>
                                                                    <div class="activity-desk">
                                                                        <h5><a href="#">Rajesh</a> <span>Uploaded 5 new photos</span></h5>
                                                                        <p class="text-muted">7 minutes ago near Alaska, USA</p>
                                                                        <div class="album">
                                                                            <a href="#">
                                                                                <img alt="" src="img/mega-img1.jpg">
                                                                            </a>
                                                                            <a href="#">
                                                                                <img alt="" src="img/mega-img2.jpg">
                                                                            </a>
                                                                            <a href="#">
                                                                                <img alt="" src="img/mega-img3.jpg">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="avatar">
                                                                        <img src="img/user/user2.jpg" alt="" />
                                                                    </div>
                                                                    <div class="activity-desk">
                                                                        <h5><a href="#">Sarah Smith</a> <span>Completed the Sight visit.</span></h5>
                                                                        <p class="text-muted">2 minutes ago near Alaska, USA</p>
                                                                        <div class="location-map">
                                                                            <div id="map-canvas"></div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="avatar">
                                                                        <img src="img/user/user3.jpg" alt="" />
                                                                    </div>
                                                                    <div class="activity-desk">
                                                                        <h5><a href="#">John Doe</a> <span>attended a meeting with</span>
									                                                    <a href="#">Lina Smith.</a></h5>
                                                                        <p class="text-muted">2 days ago near Alaska, USA</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="avatar">
                                                                        <img src="img/user/user4.jpg" alt="" />
                                                                    </div>
                                                                    <div class="activity-desk">
                                                                        <h5><a href="#">Kehn Anderson</a> <span>completed the task “wireframe design” within the dead line</span></h5>
                                                                        <p class="text-muted">4 days ago near Alaska, USA</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="avatar">
                                                                        <img src="img/user/user5.jpg" alt="" />
                                                                    </div>
                                                                    <div class="activity-desk">
                                                                        <h5><a href="#">Jacob Ryan</a> <span>was absent office due to sickness</span></h5>
                                                                        <p class="text-muted">4 days ago near Alaska, USA</p>
                                                                    </div>
                                                                </li>
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
                        </div>