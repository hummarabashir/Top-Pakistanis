<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jobs360</title>

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"> -->


    </head>

    <body>
     <?php include ('template/mainheader.php'); ?>
  <div class="row" >
   

<div class="col-lg-12" style="padding: 20px;">

                                     <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="form-top form-box" style="padding: 0px">
                        <div class="form-top-left" style="padding: 0px;">
                            
                            <div class="row" style="margin-bottom: 2%;margin-top: 2%;">
                                <div class="col-md-4" style="">
                                    <?php include 'template/rightnav.php'; ?>                                  
                                </div>
                            <div class="col-lg-8">
            

                                    <!-- Start of Profile Job Section -->
                            <div class="col-md-12" style="padding: 0px;" >
                                <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;margin-bottom: 2%;">
                                    <div class="col-lg-12">
                                        <div class="col-lg-2" style="border:1px solid #ccc; height: 90px;margin-top: 2%;margin-bottom: 2%;">
                                        </div>
                                        <div class="col-lg-9">
                                            <h5 style="font-weight: 600;margin-top: 20px;">Zeeshan Ahmad</h5>
                                            <h6 style="margin-bottom: 5px;margin-left: 0px;font-size: 15px;color: #0b395d;">Islamabad, Pakistan</h6>
                                            <p style="margin-bottom: 5px;font-size: small;font-weight: 600;"><small>Zeeshan.ahmad@gmail.com</small></p>
                                            <p style="margin-bottom: 0px;font-size: small;font-weight: 600"><strong>0300-00000000</strong></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;">
                                        <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_basicinfo_add/','Add Contact Info');"  class="btn btn-block btn-default main_btn">Add Contact Info</a>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;margin-bottom: 2%;">
                                    <h4 style="padding: 10px 15px;">Objective</h4>
                                    <p  style="padding: 0px 15px;"><small>Besides your last job title or company, employers want to know what you accomplished while there. Detail achievements and contributions made. <a href="#">Don't have work experience yet?</a></small></p>
                                    <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;">
                                        <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_objective_add/','Add  Objective');" class="btn btn-block btn-default main_btn">Add Objective</a>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;margin-bottom: 2%;">
                                    <h4 style="padding: 10px 15px;">Work Experience</h4>
                                    <p  style="padding: 0px 15px;"><small>Besides your last job title or company, employers want to know what you accomplished while there. Detail achievements and contributions made. <a href="#">Don't have work experience yet?</a></small></p>
                                    <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;">
                                        <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_workexperience_add/','Add Work Experience');" class="btn btn-block btn-default main_btn">Add Work Experience</a>
                                    </div>
                                </div>

                                <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;margin-bottom: 2%;">
                                    <h4 style="padding: 10px 15px;">Education</h4>
                                    <p  style="padding: 0px 15px;"><small>Your most recent and relevant educational attainment should come first. If you have a post-graduate or master's degree, no need to include where you went to high school. <a href="#">Don't have education yet?</a></small></p>
                                    <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;">
                                        <a  href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_education_add/','Add Education');" class="btn btn-block btn-default main_btn">Add Education</a>
                                    </div>
                                </div>                            
                                <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;margin-bottom: 2%;">
                                    <h4 style="padding: 10px 15px;">Skills</h4>
                                    <p  style="padding: 0px 15px;"><small>Enumerate your skills, competencies, and talents relevant to the position and industry you are applying to. Indicate proficiency levels (Basic, Novice, Intermediate, Advanced, Expert) for each skill. <a href="#"> Learn more.</a></small></p>
                                    <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;">
                                        <a href="javascript:;" onclick="showAjaxModal('<?php echo base_url();?>modal/newpopup/modal_skill_add/','Add Skills');" class="btn btn-block btn-default main_btn">Add skills</a>
                                    </div>
                                </div>
                                <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;margin-bottom: 2%;">
                                    <h4 style="padding: 10px 15px;">Resume</h4>
                                    <p  style="padding: 0px 15px;"><small>Uploading a resume is optional. But remember that only the information on your profile is searchable and visible to employers. When a company shortlists you for an interview, then they can unlock and see your resume.</small></p>
                                    <div class="col-lg-12">
                                        <button class="btn btn-primary" style="padding: 0px 15px;">Upload Resume</button>
                                    </div>
                                    <p style="padding: 0px 15px;"><small>Acceptable file types are DOC, DOCX, PDF, and RTF. Max file size is 10 MB.</small></p>
                                    <div class="col-lg-12" style="padding: 0px;border: 1px solid #ccc;">
                                        <button type="submit" class="btn btn-block btn-default main_btn">Add profile sections</button>
                                    </div>
                                </div>
                                   
                                    
                            </div>
                                    <!-- End of Saved Job Section -->
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
</div>
</body>
        
     
       
           <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/neon-forms.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">


           <script src="<?php echo base_url() ?>assets/js/fileinput.js"></script>
   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php include 'template/modal.php' ?>
