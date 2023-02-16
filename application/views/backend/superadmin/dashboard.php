<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
            
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="fa fa-group"></i></div>
                    <div class="num" data-start="0" data-end="<?php 
                        $this->db->where('method','normal');
                        echo $this->db->count_all_results('users');
                    ?>" 
                            data-postfix="" data-duration="1500" data-delay="0">0</div>
                    
                    <h3><?php echo 'Profiles';?></h3>
                   <p>Total Profiles</p>
                </div>
                
            </div>
            <div class="col-md-4">
            
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-user"></i></div>
                    
                    <div class="num" data-start="0" data-end="<?php
                        $this->db->where('method','recruiter');
                        echo $this->db->count_all_results('users');
                    ?>" 
                            data-postfix="" data-duration="800" data-delay="0">0</div>
                    
                    <h3><?php echo 'Employers';?></h3>
                   <p>Total Employers</p>
                </div>
                
            </div>

            <div class="col-md-4">
            
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-user"></i></div>
                    <?php 
                            
                        ?>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all_results('admin');?>" 
                            data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo 'Admins';?></h3>
                   <p>Total Admins</p>
                </div>
                
            </div>
            
          <!--   <div class="col-md-3">
            
                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all_results('tbl_job');?>" 
                            data-postfix="" data-duration="500" data-delay="0">0</div>
                    
                    <h3><?php echo 'Jobs';?></h3>
                   <p>Total Jobs</p>
                </div>
                
            </div> -->


        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <!-- CALENDAR-->
            <div class="col-md-12 col-xs-12">    
                <div class="panel panel-primary " data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <i class="fa fa-calendar"></i>
                            <?php echo get_phrase('event_schedule');?>
                        </div>
                    </div>
                    <div class="panel-body" style="padding:0px;">
                        <div class="calendar-env">
                            <div class="calendar-body">
                                <div id="notice_calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</div>



    <script>
  $(document).ready(function() {
      
      var calendar = $('#notice_calendar');
                
                $('#notice_calendar').fullCalendar({
                    header: {
                        left: 'title',
                        right: 'today prev,next'
                    },
                    
                    //defaultView: 'basicWeek',
                    
                    editable: false,
                    firstDay: 1,
                    height: 530,
                    droppable: false,
                    
                    events: [
                        
                        
                    ]
                });
    });
  </script>

  
