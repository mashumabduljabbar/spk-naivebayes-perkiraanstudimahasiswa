<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if($_GET['bayes']=='' OR $_GET['bayes']=='Home'){ $HOME = "active"; }else{ $HOME = ""; }

if($_GET['bayes']=='01_quisioner'){ $quisioner = "active"; }else{ $quisioner = ""; }

if($_GET['bayes']=='02_probabilitas_atribut'){ $probabilitas_atribut = "active"; }else{ $probabilitas_atribut = ""; }

if($_GET['bayes']=='pertanyaan'){ $pertanyaan = "active"; }else{ $pertanyaan = ""; }

if($_GET['bayes']=='daftar_solusi'){ $SOLUSI = "active"; }else{ $SOLUSI = ""; }

if($_GET['bayes']=='daftar_user'){ $USER = "active"; }else{ $USER = ""; }

if($_GET['bayes']=='tbl_admin'){ $ADMIN = "active"; }else{ $ADMIN = ""; }

?>
<!-- MENU SECTION -->
       <div id="left" >
           
            <ul id="menu" class="collapse">               
                <li class="panel <?php echo $HOME;?>">
                    <a href="?bayes=Home" >
                        <i class="icon-table"></i> HOME
	   
                       
                    </a>                   
                </li>
                <li class="panel <?php echo $quisioner;?>">
                    <a href="?bayes=01_quisioner">
                        <i class="icon-tasks"> </i> QUISIONER     
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                    </a>
                </li>
                <li class="panel <?php echo $probabilitas_atribut;?>">
                    <a href="?bayes=02_probabilitas_atribut">
                        <i class="icon-tasks"> </i> PROB. ATRIBUT     
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                    </a>
                </li>
                <li class="panel <?php echo $pertanyaan;?>">
                    <a href="?bayes=pertanyaan">
                        <i class="icon-tasks"> </i> PERTANYAAN     
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                    </a>
                </li>
				
                <li class="panel <?php echo $SOLUSI;?>">
                    <a href="?bayes=daftar_solusi">
                        <i class="icon-tasks"> </i> SOLUSI KELULUSAN     
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                    </a>
                </li>
                <li class="panel <?php echo $USER;?>">
                    <a href="?bayes=daftar_user">
                        <i class="icon-tasks"> </i> USERS     
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                    </a>
                </li>
                <li class="panel <?php echo $ADMIN;?>">
                    <a href="?bayes=tbl_admin">
                        <i class="icon-tasks"> </i> ADMIN     
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                    </a>
                </li>
                <li class="panel">
                    <a href="?bayes=Logout">
                        <i class="icon-tasks"> </i> LOGOUT     
                        <span class="pull-right">
                          
                        </span>
                       &nbsp; <span class="label label-default"></span>&nbsp;
                    </a>
                </li>
				
            </ul>

        </div>
        <!--END MENU SECTION -->