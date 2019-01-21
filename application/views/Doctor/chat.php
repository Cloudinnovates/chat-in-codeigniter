

<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="description" content="Responsive Admin Template" />
        <meta name="author" content="RedstarHospital" />
        <title>Online Hospital</title>
        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <!-- icons -->
        <link href="<?php echo base_url(); ?>assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--bootstrap -->

        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Material Design Lite CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/material/material.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/material_style.css">
        <!-- Theme Styles -->
        <link href="<?php echo base_url(); ?>css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>css/theme-color.css" rel="stylesheet" type="text/css" />
        <!-- favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" /> 

        <style type="text/css">
            body,html{
                height: 100%;
                margin: 0;
                background: whitesmoke;;
            }

            .chat{
                margin-top: auto;
                margin-bottom: auto;
            }
            .card{
                height: 500px;
                border-radius: 15px !important;
                background-color: rgba(0,0,0,0.4) !important;
            }
            .contacts_body{
                padding:  0.75rem 0 !important;
                overflow-y: auto;
                white-space: nowrap;
            }
            .msg_card_body{
                overflow-y: auto;
            }
            .card-header{
                border-radius: 15px 15px 0 0 !important;
                border-bottom: 0 !important;
            }
            .card-footer{
                border-radius: 0 0 15px 15px !important;
                border-top: 0 !important;
            }
            .container{
                align-content: center;
            }
            .search{
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0,0,0,0.3) !important;
                border:0 !important;
                color:white !important;
            }
            .search:focus{
                box-shadow:none !important;
                outline:0px !important;
            }
            .type_msg{
                background-color: rgba(0,0,0,0.3) !important;
                border:0 !important;
                color:white !important;
                height: 60px !important;
                overflow-y: auto;
            }
            .type_msg:focus{
                box-shadow:none !important;
                outline:0px !important;
            }
            .attach_btn{
                border-radius: 15px 0 0 15px !important;
                background-color: rgba(0,0,0,0.3) !important;
                border:0 !important;
                color: white !important;
                cursor: pointer;
            }
            .send_btn{
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(0,0,0,0.3) !important;
                border:0 !important;
                color: white !important;
                cursor: pointer;
            }
            .search_btn{
                border-radius: 0 15px 15px 0 !important;
                background-color: rgba(16, 15, 15, 0.63) !important;
                border:0 !important;
                color: white !important;
                cursor: pointer;
            }
            .contacts{
                list-style: none;
                padding: 0;
            }
            .contacts li{
                width: 100% !important;
                padding: 5px 10px;
                margin-bottom: 15px !important;
            }
            .active{
                background-color: rgba(0,0,0,0.3);
            }
            .user_img{
                height: 70px;
                width: 70px;
                border:1.5px solid #f5f6fa;

            }
            .user_img_msg{
                height: 40px;
                width: 40px;
                border:1.5px solid #f5f6fa;

            }
            .img_cont{
                position: relative;
                height: 70px;
                width: 70px;
            }
            .img_cont_msg{
                height: 40px;
                width: 40px;
            }
            .online_icon{
                position: absolute;
                height: 15px;
                width:15px;
                background-color: #4cd137;
                border-radius: 50%;
                bottom: 0.2em;
                right: 0.4em;
                border:1.5px solid white;
            }
            .offline{
                background-color: #c23616 !important;
            }
            .user_info{
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 15px;
            }
            .user_info span{
                font-size: 20px;
                color: white;
            }
            .user_info p{
                font-size: 10px;
                color: rgba(255,255,255,0.6);
            }
            .video_cam{
                margin-left: 313px;
            }
            .video_cam span{
                color: white;
                font-size: 20px;
                cursor: pointer;
                margin-right: 20px;
            }
            .msg_cotainer{
                margin-top: auto;
                margin-bottom: auto;
                margin-left: 10px;
                border-radius: 25px;
                background-color: #82ccdd;
                padding: 10px;
                position: relative;
            }
            .msg_cotainer_send{
                margin-top: auto;
                margin-bottom: auto;
                margin-right: 10px;
                border-radius: 25px;
                background-color: #78e08f;
                padding: 10px;
                position: relative;
            }
            .msg_time{
                position: absolute;
                left: 0;
                bottom: -15px;
                color: rgba(255,255,255,0.5);
                font-size: 10px;
            }
            .msg_time_send{
                position: absolute;
                right:0;
                width: 96px;
                bottom: -15px;
                color: rgba(255,255,255,0.5);
                font-size: 10px;
            }
            .msg_head{
                position: relative;
            }
            #action_menu_btn{
                position: absolute;
                right: 10px;
                top: 10px;
                color: white;
                cursor: pointer;
                font-size: 20px;
            }
            .action_menu{
                z-index: 1;
                position: absolute;
                padding: 15px 0;
                background-color: rgba(0,0,0,0.5);
                color: white;
                border-radius: 15px;
                top: 30px;
                right: 15px;
                display: none;
            }
            .action_menu ul{
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .action_menu ul li{
                width: 100%;
                padding: 10px 15px;
                margin-bottom: 5px;
            }
            .action_menu ul li i{
                padding-right: 10px;

            }
            .action_menu ul li:hover{
                cursor: pointer;
                background-color: rgba(0,0,0,0.2);
            }
            @media(max-width: 576px){
                .contacts_card{
                    margin-bottom: 15px !important;
                }
            }
            .card{
                position: relative;
                margin-bottom: 0px;
                margin-top: 39px;
                background-color: #ffffff;
                border-radius: 3px;
                -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
            }

        </style>
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md page-full-width header-white white-sidebar-color logo-indigo">
        <div class="page-wrapper">
            <!-- start header -->
            <div class="page-header navbar navbar-fixed-top">
                <div class="page-header-inner ">
                    <!-- logo start -->
                    <div class="page-logo">
                        <a href="<?php echo base_url() ?>doctor">
                            <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                            <span class="logo-default" >Online</span> </a>
                    </div>
                    <!-- logo end -->
                    <ul class="nav navbar-nav navbar-left in">
                        <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
                    </ul>
                    <form class="search-form-opened" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- start mobile menu -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- end mobile menu -->
                    <!-- start header menu -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- start language menu -->

                            <!-- end message dropdown -->
                            <!-- start manage user dropdown -->
                            <li class="dropdown dropdown-user">
                                <?php
                                $doctorPhoto = '';
                                foreach ($doctorInfo as $info) {
                                    ?>
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <img alt="" class="img-circle" style=" float: left;margin-top: -3px; margin-right: 5px; height: 41px; display: inline-block; width: 41px;" src="<?php echo $info->photo ?>" />
                                        <span class="username username-hide-on-mobile"><?php echo $info->firstName;
                                $doctorPhoto = $info->photo; ?><?php echo $info->lastName; ?> </span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                <?php } ?>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="user_profile.html">
                                            <i class="icon-user"></i> Profile </a>
                                    </li>

                                    <li>
                                        <a href="<?php echo base_url(); ?>welcome/logout">
                                            <i class="icon-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- end manage user dropdown -->
                            <li class="dropdown dropdown-quick-sidebar-toggler">
                                <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                                    <i class="material-icons">more_vert</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
                <!-- start horizontal menu -->
                <div class="navbar-custom">
                    <div class="hor-menu hidden-sm hidden-xs">

                    </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
            <div class="row">

            </div>
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- start widget -->
                    <div class="state-overview">
                        <div class="row" style="margin-top: 50px;">

                        </div>
                        <!-- end widget -->
                        <!-- chart start -->

                        <!-- Chart end -->


                        <div class="container-fluid h-100">
                            <div class="row justify-content-center h-100">
                                <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
                                        <div class="card-header">
                                            <div class="input-group">
                                                <input type="text" placeholder="Search..." name="" class="form-control search">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body contacts_body">
                                            <ui class="contacts">
                                                <li class="active">


                                                    <?php foreach ($allPatinet as $doc) {
                                                        ?> 


                                                        <div class="d-flex bd-highlight">
                                                            <div class="img_cont">
                                                                <a href="<?php echo base_url() ?>doctor/chat/<?php echo $doc->patient_id; ?>">
                                                                    <img src="<?php echo $doc->photo ?>" class="rounded-circle user_img"></a>
                                                                <span class="online_icon"></span>
                                                            </div>
                                                            <div class="user_info">
                                                                <a href="<?php echo base_url() ?>doctor/chat/<?php echo $doc->patient_id; ?>">
                                                                    <span><?php echo $doc->name; ?> </span></a>
                                                                <p><?php echo $doc->name; ?> is online</p>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </li>



                                            </ui>
                                        </div>
                                        <div class="card-footer"></div>
                                    </div></div>
                                <div class="col-md-8 col-xl-6 chat">
                                    <div class="card"> 
                                        <?php $patphoto = '';
                                        ?>

                                        <?php foreach ($patientInfo as $doc) { ?> 




                                            <div class="card-header msg_head">
                                                <div class="d-flex bd-highlight">
                                                    <div class="img_cont">
                                                        <img src="<?php echo $doc->photo ?>" class="rounded-circle user_img">
                                                        <span class="online_icon"></span>
                                                    </div>
                                                    <div class="user_info">
                                                        <span><?php
                                            $patphoto = $doc->photo;
                                            echo $doc->name
                                            ?> </span>

                                                    </div>
                                                    <div class="video_cam">
                                                        <span><i class="fas fa-video"></i></span>
                                                        <span><i class="fas fa-phone"></i></span>
                                                    </div>
                                                </div>
                                                <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                                                <div class="action_menu">
                                                    <ul>
                                                        <li><i class="fas fa-user-circle"></i> View profile</li>
                                                        <li><i class="fas fa-users"></i> Add to close friends</li>
                                                        <li><i class="fas fa-plus"></i> Add to group</li>
                                                        <li><i class="fas fa-ban"></i> Block</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <div class="card-body msg_card_body">
                                            <?php
                                            foreach ($message as $mess) {
                                                if ($mess->senderID == $doctorID && $mess->recieverID == $patientID || $mess->senderID == $patientID && $mess->recieverID == $doctorID) {
                                                    ?>
                                                     <?php if ($mess->senderID == $patientID) { ?>
                                                        <div class="d-flex justify-content-start mb-4">
                                                            <div class="img_cont_msg">
                                                                <img src="<?php echo $patphoto; ?>" class="rounded-circle user_img_msg">
                                                            </div>

                                                            <div class="msg_cotainer">

                                                                   <?php echo $mess->message ?>
                                                                <span class="msg_time_send"><?php echo $mess->time ?></span>

                                                            </div>

                                                        </div>
                                                    <?php } ?>
                                                    <?php if ($mess->senderID == $doctorID) { ?>
                                                        <div class="d-flex justify-content-end mb-4">
                                                            <div class="msg_cotainer_send">

                                                      <?php echo $mess->message ?>
                                                                <span class="msg_time_send"><?php echo $mess->time ?> </span>

                                                            </div>
                                                            <div class="img_cont_msg">
                                                                <img src="<?php echo $doctorPhoto; ?>" class="rounded-circle user_img_msg">
                                                            </div>
                                                        </div>
                                                    <?php } ?>
    <?php }
} ?>



                                        </div>
                                        <form action="<?php echo base_url() ?>doctor/saveMessage" method="post">
                                            <div class="card-footer">

                                                <div class="input-group">

                                                    <div class="input-group-append">
                                                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                                    </div>
                                                    <textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                                                    <input type="hidden" name="senderID" value="<?php echo $doctorID ?>">
                                                    <input type="hidden" name="recieverID" value="<?php echo $patientID ?>">
                                                    <div class="input-group-append">
                                                        <button class="login100-form-btn">
                                                            <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                                                        </button>

                                                    </div>

                                                </div>
                                            </div>
                                        </form>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start admited patient list -->

                        <!-- end admited patient list -->
                    </div>
                </div>
                <!-- end page content -->
                <!-- start chat sidebar -->
                <div class="chat-sidebar-container" data-close-on-body-click="false">
                    <div class="chat-sidebar">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_1" class="nav-link active tab-icon"  data-toggle="tab"> <i class="material-icons">chat</i>Chat
                                    <span class="badge badge-danger">4</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#quick_sidebar_tab_3" class="nav-link tab-icon"  data-toggle="tab"> <i class="material-icons">settings</i> Settings
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- Start Doctor Chat --> 
                            <div class="tab-pane active chat-sidebar-chat in active show" role="tabpanel" id="quick_sidebar_tab_1">
                                <div class="chat-sidebar-list">
                                    <div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd" data-wrapper-class="chat-sidebar-list">
                                        <div class="chat-header"><h5 class="list-heading">Online</h5></div>
                                        <ul class="media-list list-items">
                                            <li class="media"><img class="media-object" src="img/doc/doc3.jpg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">John Deo</h5>
                                                    <div class="media-heading-sub">Spine Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">5</span>
                                                </div> <img class="media-object" src="img/doc/doc1.jpg" width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Rajesh</h5>
                                                    <div class="media-heading-sub">Director</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc5.jpg" width="35" height="35" alt="...">
                                                <i class="away dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jacob Ryan</h5>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-danger">8</span>
                                                </div> <img class="media-object" src="img/doc/doc4.jpg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Kehn Anderson</h5>
                                                    <div class="media-heading-sub">CEO</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc2.jpg" width="35" height="35" alt="...">
                                                <i class="busy dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Sarah Smith</h5>
                                                    <div class="media-heading-sub">Anaesthetics</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc7.jpg" width="35" height="35" alt="...">
                                                <i class="online dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Vlad Cardella</h5>
                                                    <div class="media-heading-sub">Cardiologist</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="chat-header"><h5 class="list-heading">Offline</h5></div>
                                        <ul class="media-list list-items">
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-warning">4</span>
                                                </div> <img class="media-object" src="img/doc/doc6.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jennifer Maklen</h5>
                                                    <div class="media-heading-sub">Nurse</div>
                                                    <div class="media-heading-small">Last seen 01:20 AM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc8.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Lina Smith</h5>
                                                    <div class="media-heading-sub">Ortho Surgeon</div>
                                                    <div class="media-heading-small">Last seen 11:14 PM</div>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-status">
                                                    <span class="badge badge-success">9</span>
                                                </div> <img class="media-object" src="img/doc/doc9.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Jeff Adam</h5>
                                                    <div class="media-heading-sub">Compounder</div>
                                                    <div class="media-heading-small">Last seen 3:31 PM</div>
                                                </div>
                                            </li>
                                            <li class="media"><img class="media-object" src="img/doc/doc10.jpg" width="35" height="35" alt="...">
                                                <i class="offline dot"></i>
                                                <div class="media-body">
                                                    <h5 class="media-heading">Anjelina Cardella</h5>
                                                    <div class="media-heading-sub">Physiotherapist</div>
                                                    <div class="media-heading-small">Last seen 7:45 PM</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="chat-sidebar-item">
                                    <div class="chat-sidebar-chat-user">
                                        <div class="page-quick-sidemenu">
                                            <a href="javascript:;" class="chat-sidebar-back-to-list">
                                                <i class="fa fa-angle-double-left"></i>Back
                                            </a>
                                        </div>
                                        <div class="chat-sidebar-chat-user-messages">
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:10</span>
                                                    <span class="body-out"> could you send me menu icons ? </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="img/doc/doc5.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:10</span>
                                                    <span class="body"> please give me 10 minutes. </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:11</span>
                                                    <span class="body-out"> ok fine :) </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="img/doc/doc5.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:22</span>
                                                    <span class="body">Sorry for
                                                        the delay. i sent mail to you. let me know if it is ok or not.</span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                    <span class="body-out"> it is perfect! :) </span>
                                                </div>
                                            </div>
                                            <div class="post out">
                                                <img class="avatar" alt="" src="img/dp.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span> <a href="javascript:;" class="name">Kiran Patel</a> <span class="datetime">9:26</span>
                                                    <span class="body-out"> Great! Thanks. </span>
                                                </div>
                                            </div>
                                            <div class="post in">
                                                <img class="avatar" alt="" src="img/doc/doc5.jpg" />
                                                <div class="message">
                                                    <span class="arrow"></span> <a href="javascript:;" class="name">Jacob Ryan</a> <span class="datetime">9:27</span>
                                                    <span class="body"> it is my pleasure :) </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-sidebar-chat-user-form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Type a message here...">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn deepPink-bgcolor">
                                                        <i class="fa fa-arrow-right"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Doctor Chat --> 
                            <!-- Start Setting Panel --> 
                            <div class="tab-pane chat-sidebar-settings" role="tabpanel" id="quick_sidebar_tab_3">
                                <div class="chat-sidebar-settings-list slimscroll-style">
                                    <div class="chat-header"><h5 class="list-heading">Layout Settings</h5></div>
                                    <div class="chatpane inner-content ">
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Sidebar Position</div>
                                                <div class="setting-set">
                                                    <select class="sidebar-pos-option form-control input-inline input-sm input-small ">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Header</div>
                                                <div class="setting-set">
                                                    <select class="page-header-option form-control input-inline input-sm input-small ">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Sidebar Menu </div>
                                                <div class="setting-set">
                                                    <select class="sidebar-menu-option form-control input-inline input-sm input-small ">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Footer</div>
                                                <div class="setting-set">
                                                    <select class="page-footer-option form-control input-inline input-sm input-small ">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header"><h5 class="list-heading">Account Settings</h5></div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Notifications</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                               for = "switch-1">
                                                            <input type = "checkbox" id = "switch-1" 
                                                                   class = "mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Show Online</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                               for = "switch-7">
                                                            <input type = "checkbox" id = "switch-7" 
                                                                   class = "mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Status</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                               for = "switch-2">
                                                            <input type = "checkbox" id = "switch-2" 
                                                                   class = "mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">2 Steps Verification</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                               for = "switch-3">
                                                            <input type = "checkbox" id = "switch-3" 
                                                                   class = "mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-header"><h5 class="list-heading">General Settings</h5></div>
                                        <div class="settings-list">
                                            <div class="setting-item">
                                                <div class="setting-text">Location</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                               for = "switch-4">
                                                            <input type = "checkbox" id = "switch-4" 
                                                                   class = "mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Save Histry</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                               for = "switch-5">
                                                            <input type = "checkbox" id = "switch-5" 
                                                                   class = "mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="setting-item">
                                                <div class="setting-text">Auto Updates</div>
                                                <div class="setting-set">
                                                    <div class="switch">
                                                        <label class = "mdl-switch mdl-js-switch mdl-js-ripple-effect" 
                                                               for = "switch-6">
                                                            <input type = "checkbox" id = "switch-6" 
                                                                   class = "mdl-switch__input" checked>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end chat sidebar -->
            </div>
            <!-- end page container -->
            <!-- start footer -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2018 &copy; Online Hospital
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- end footer -->
        </div>
        <!-- start js include path -->
        <script src="<?php echo base_url(); ?>assets/jquery.min.js" ></script>
        <script src="<?php echo base_url(); ?>assets/popper/popper.js" ></script>
        <script src="<?php echo base_url(); ?>assets/jquery.blockui.min.js" ></script>
        <script src="<?php echo base_url(); ?>assets/jquery.slimscroll.js"></script>
        <!-- bootstrap -->
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" ></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap-switch/js/bootstrap-switch.min.js" ></script>
        <!-- counterup -->
        <script src="<?php echo base_url(); ?>assets/counterup/jquery.waypoints.min.js" ></script>
        <script src="<?php echo base_url(); ?>assets/counterup/jquery.counterup.min.js" ></script>
        <!-- Common js-->
        <script src="<?php echo base_url(); ?>assets/app.js" ></script>
        <script src="<?php echo base_url(); ?>assets/layout.js" ></script>
        <script src="<?php echo base_url(); ?>assets/theme-color.js" ></script>
        <!-- material -->
        <script src="<?php echo base_url(); ?>assets/material/material.min.js"></script>
        <!-- chart js -->
        <script src="<?php echo base_url(); ?>assets/chart-js/Chart.bundle.js" ></script>
        <script src="<?php echo base_url(); ?>assets/chart-js/utils.js" ></script>
        <script src="<?php echo base_url(); ?>assets/chart-js/home-data.js" ></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#action_menu_btn').click(function () {
                    $('.action_menu').toggle();
                });
            });
        </script>
        <!-- end js include path -->
    </body>

</html>
