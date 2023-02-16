

<style type="text/css">
    
    .form-horizontal .form-group {
 
    color: black !important;
}
 label::before {
        content: none !important;
      }
#ex1Slider .slider-selection {
	background: #BABABA;
}
.well {margin-top:10px;max-width:100%;}

/* Example 3 */
#RGB {
	height: 20px;
	background: rgb(128, 128, 128);
}
#RC .slider-selection {
	background: #FF8282;
}
#RC .slider-handle {
	background: red;
}
#GC .slider-selection {
	background: #428041;
}
#GC .slider-handle {
	background: green;
}
#BC .slider-selection {
	background: #8283FF;
}
#BC .slider-handle {
	border-bottom-color: blue;
}
#R, #G, #B {
	width: 300px;
}

</style>



<div class="row">
	<div class="col-md-12">

    	
	
		<div class="tab-content">
        	<!----EDITING FORM STARTS---->
			<div class="tab-pane box active" id="list" style="padding: 5px; background-color: transparent;">
                <div class="box-content">
				
                    <form method="post" action="<?php echo base_url('users/add_skill'); ?>" enctype='multipart/form-data'>
                        <div class="resumeadd-form">
                                    <div class="row align-items-end">
                                        <div class="col-lg-12">
                                            <span class="pf-title">Skill Heading</span>
                                            <div class="pf-field">
                                                <input placeholder="" name="skill" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="pf-title">Percentage</span>
                                            <div class="pf-field">
                                                <input placeholder="" name="rating" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                             <button type="submit" class="btn btn-primary btn-block btn-lg">Save</button>
                                        </div>
                                    </div>
                                </div>
                    </form>

                 <!--        <?php echo form_open(base_url() . 'index.php/users/add_skill' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Skill');?></label>
                                <div class="col-sm-5">
                                    <input type="type" class="form-control" name="skill" required="required" />
                                </div>
                            </div>
<br>

                            <div class="form-group">
                                <label class="col-sm-3 control-label"><?php echo ('Rating');?></label>
                                <div class="col-sm-5">
                                    <input type="range" id="slider" value="100" name="rating" min="0" max="100" step="1" />
                                     
                                </div>
               
                                
                            </div>


<br><br>

                           
                            <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Save Skills');?></button>
                              </div>
								</div>
                        </form> -->
                </div>
			</div>
            <!----EDITING FORM ENDS-->
            
		</div>
	</div>
</div>





