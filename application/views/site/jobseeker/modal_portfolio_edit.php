<?php 
//echo $param2;
//exit();
$edit_data = $this->db->get_where('cv_portfolio', array('id' => $param2) )->result_array();
foreach ( $edit_data as $row):
?>
<div class="row">
  <div class="col-md-12">
      
  
    <div class="tab-content">
          <!----EDITING FORM STARTS---->
      <div class="tab-pane box active" id="list" style="padding: 5px; background-color: transparent;">
                <div class="box-content">
                    <?php echo form_open(base_url() . 'users/update_portfolio/' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top', 'enctype' => 'multipart/form-data'));?>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="userfile" value="<?php echo $row['picture_url']; ?>">
                          <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Portfolio Name');?></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>" />
                            </div>
                        </div> 
                           <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Portfolio Link');?></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="link" value="<?php echo $row['link']; ?>" />
                            </div>
                        </div>  
                          <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo get_phrase('Portfolio Description');?></label>
                            <div class="col-sm-7">
                                <textarea class="form-control" name="description" id="editor3" rows="10" cols="80" required> <?php echo $row['description']; ?> </textarea>
                            </div>
                        </div>   
                       

                           <div class="form-group">
                            <label for="field-1" class="col-sm-4 control-label"><?php echo ('Feature image ');?></label>
                              <div class="form-group">
                                            
                                                 
                                                  <div class="col-sm-7">
                                                      <span class="btn btn-white btn-file">
                                                        
                                                        
                                                          <input type="file" name="userfile">
                                                      </span>
                                                      
                                                 
                                              </div>
                                          </div>
                               </div>      
                            
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info btn-block"><?php echo get_phrase('update');?></button>
                            </div>
                        </div>
                <?php echo form_close();?>
            </div>
        </div>
    </div>
</div>
</div>

<?php
endforeach;
?>