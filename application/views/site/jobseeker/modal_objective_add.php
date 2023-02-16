

  <?php

$edit_data=$this->db->get_where('cv_objective', array(
                'user_id' => $this->session->userdata("logged_id")
            ))->result_array();

// if(count($edit_data)>0){


// }else{

// $edit_data=$this->db->get_where('users', array(
//                 'id' => $this->session->userdata("logged_id")
//             ))->result_array();

// }


?>


<!-- Create the editor container -->

<style type="text/css">
    
    .form-horizontal .form-group {
 
    color: black !important;
}
 label::before {
        content: none !important;
      }
</style>
<div class="row">
  <div class="col-md-12">
    <br><br>
      
  
    <div class="tab-content">
          <!----EDITING FORM STARTS---->
      <div class="tab-pane box active" id="list" style="padding: 5px; background-color: transparent;">
                <div class="box-content">

<div class="resumeadd-form">
                  <div class="row">
                    <div class="col-lg-12">
                      <p>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg &amp; .png</p>
                    </div>
                    <div class="col-lg-12">
                      <div class="upload-portfolio">
                        <div class="uploadbox">
                          <label for="file-upload" class="custom-file-upload">
                              <i class="la la-cloud-upload"></i> <span>Upload Image</span>
                          </label>
                          <input id="file-upload" type="file" style="display: none;">
                        </div>
                        <div class="uploadfield">
                          <span class="pf-title">Title</span>
                          <div class="pf-field">
                            <input placeholder="Title.." type="text">
                          </div>
                        </div>
                        <div class="uploadbutton">
                          <button type="submit">Save</button>
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

<!-- <?php echo form_open(base_url() . 'index.php/users/update_objective' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top' , 'enctype' => 'multipart/form-data'));?>


          <div class="form-group">
            <label for="field-1" class="col-sm-3 control-label"><?php echo ('objective ');?></label>
            <div class="col-sm-8">
              <textarea   style="width:300px; height:150px;"   name="objective" ><?php if (isset($edit_data[0]['objective_detail'])){ echo $edit_data[0]['objective_detail'];}?> </textarea>
            </div>
          </div>
     <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Save ');?></button>
                              </div>
								</div>
								 </form> -->
