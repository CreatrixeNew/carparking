<?php // echo"<pre>";print_r($res[0]['user_type']);exit;   ?>  
<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {

        $(document).on('change', '#user_image', function() {
            $.ajaxFileUpload({
                url: '<?php echo base_url(); ?>users/uploadFile',
                secureuri: false,
                fileElementId: 'user_image',
                dataType: 'json',
                success: function(data, status) {

                    if (typeof (data.error) != 'undefined') {
                        if (data.error != '') {
                            alert(data.error);
                            $('#user_image').val('');
                        } else {
                            
                            var a = data.msg;
                            var imagename = a.replace("thumb_", "");
                            $('#hidden_file').val(imagename);
                        }
                    }
                },
                error: function(data, status, e) {
                    
                    $('#user_image').val('');
                    alert(e);
                }
            });

        });
    });
</script>
<style>
    select{width:281px;}
    input[type="text"],[type="password"]{height:31px;}
</style>
<div class="container-fluid">
    <ul class="breadcrumb">
        <li><a href="#">Car Parking</a><span class="divider">&raquo;</span></li>
        <li><a href="#">Employee Management</a><span class="divider">&raquo;</span></li>
        <li class="active">Update Employee </li>
    </ul>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-block">
                <div class="widget-head">
                    <h5>Update Employee</h5>
                </div>
                <div class="widget-content">
                    <div class="widget-box">
                        <div class="well white-box">
                             <?php  if($this->session->flashdata('message')) {?>
                                        <div class="alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                            <strong><?php echo $this->session->flashdata('message'); ?> </strong>
                                        </div>
                                    <?php } ?>
                            <fieldset>
                                <div class="span5">
                                    <ul class="heart_icn" style="margin-bottom: 40px;margin-left: 167px;">
                                        <li>
                                            <h6>Add Biography</h6>

                                        </li>
                                    </ul>
                                 
                                    <form class="form-horizontal well" method="post" action="<?php echo base_url() . "users/updateBio" ?>">

                                        <div class="control-group">
                                            <label class="control-label" for="input01">First Name:</label>
                                            <div class="controls">
                                                <input type="hidden" id="user_id" name="user_id" value="<?php echo $this->uri->segment(4); ?>">
                                                <input  value="<?php echo $res[0]['user_first_name']; ?>" required type="text" class="input-xlarge text-tip" name="user_first_name" id="user_first_name" title="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Last Name:</label>
                                            <div class="controls">
                                                <input value="<?php echo $res[0]['user_last_name']; ?>" required id="user_last_name" name="user_last_name" type="text" class="input-xlarge text-tip" id="input01" title="Enter Last Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Gender</label>
                                            <div class="controls">
                                                <label class="radio inline">
                                                    <?php $g = $res[0]['user_gender']; ?>
                                                    <input type="radio" <?php if ($g == "male") { ?> checked="checked" <?php } ?> value="male" id="user_gender" name="user_gender">
                                                    Male</label>
                                                <label class="radio inline">
                                                    <input <?php if ($g == "female") { ?> checked="checked" <?php } ?> type="radio" value="female" id="user_gender" name="user_gender">
                                                    Female</label>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Employee Designation</label>
                                            <div class="controls">
                                                <?php $t = $res[0]['user_type']; ?>
                                                <select name="user_type" id="user_type">
                                                    <option  <?php if ($g == "driver") { ?> selected <?php } ?> value="driver">Driver</option>
                                                    <option  <?php if ($g == "controller") { ?> selected <?php } ?> value="controller">Controller</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Date of Birth:</label>
                                            <div class="controls">
                                                <input value="<?php echo $res[0]['user_dob']; ?>" required name="user_dob" type="text" class="input-xlarge text-tip" id="datepicker" title="Select Date of Birth">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Phone:</label>
                                            <div class="controls">
                                                <input value="<?php echo $res[0]['user_phone']; ?>" required id="user_phone" name="user_phone" type="text" class="input-xlarge text-tip" title="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Email:</label>
                                            <div class="controls">
                                                <input value="<?php echo $res[0]['user_email']; ?>" id="user_email" name="user_email" type="text" class="input-xlarge text-tip" title="Enter Email">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Address</label>
                                            <div class="controls">
                                                <textarea id="user_address" name="user_address" class="input-xlarge" rows="3">  <?php echo $res[0]['user_address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32%;   width: 100%;">
                                            <button style="width: 138px;" type="submit" class="btn btn-info">Save changes</button>
                                            <button style="width: 138px;" class="btn btn-warning">Cancel</button>
                                        </div>
                                    </form>
                                </div>

                                <form class="form-horizontal well" method="post" action="<?php echo base_url() . 'users/saveDetails' ?>">
                                                                                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $this->uri->segment(4); ?>">

                                    <div class="span5" style=" border-left: 2px solid #3c8dbc ;margin-left: 123px;">
                                        <ul class="pin_icn" style="margin-left: 167px;margin-bottom: 40px;">
                                            <li>
                                                <h6>Setup Job Details</h6>
                                            </li>
                                        </ul>
                                        <div class="control-group">
                                            <label class="control-label">Assign Contract</label>
                                            <div class="controls">
                                                <?php // $cont = getContractList();
//                                                    print_r(getContractList());?>
                                                <select name="user_contract">
                                                   <?php 
                                                    $uc =  $res[0]['user_contract'];
                                                    $cont = getContractList();
//                                                    print_r(getContractList());
                                                    foreach($cont as $sh){
                                                    ?>
                                                    <option <?php if($sh['contract_id'] == $uc && $uc !=""){ ?> selected <?php } ?> value="<?php echo $sh['contract_id']; ?>">
                                                        <?php echo $sh['contract_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Assign Shift</label>
                                            <div class="controls">
                                                <select name="user_shift">
                                                    <?php 
                                                    $us =  $res[0]['user_shift'];
                                                    $shift = getshiftList();
                                                    $count=0;
                                                    foreach($shift as $sh){
                                                    ?>
                                                    <option <?php if($sh['shift_id'] == $us && $us !=""){ ?> selected <?php } ?> value="<?php echo $sh['shift_id']; ?>">
                                                        <?php echo $sh['shift_name']; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="control-group">
                                            <label class="control-label">Assign Airports</label>
                                            <div class="controls">
                                                <select name="user_airports[]" multiple="multiple">
                                                    <?php $result = getAirportList(); 
                                                    $user_airports = getEmployeeAirports($res[0]['user_id']);
                                                    
                                                            foreach($result as $s){                                                                                                                        
                                                               
                                                           ?>
                                                      <option  <?php  foreach($user_airports as $a){ 

                                                                if($a['airport_id']==$s['airport_id']){ ?>
                                                                    selected  
                                                      <?php }}?> value="<?php echo $s['airport_id']?>"><?php echo $s['airport_name']; ?></option>
                 
                                                        <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Select Photo</label>
                                            <div class="controls">
                                                <input value="<?php echo $res[0]['user_image']; ?>" type="hidden" id="hidden_file" name="hidden_file" >
                                                <input id="user_image" name="user_image" class="input-file" type="file">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Set Salary:</label>
                                            <div class="controls">
                                                <input value="<?php echo $res[0]['user_salary_rate']; ?>" name="user_salary_rate" type="text" class="input-xlarge text-tip" id="input01" title="Set Employee Salary per Hour">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Bank Name:</label>
                                            <div class="controls">
                                                <input required value="<?php echo $res[0]['user_bank_name']; ?>" name="user_bank_name" type="text" class="input-xlarge text-tip" id="input01" title="What is Bank Name?">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Account Title:</label>
                                            <div class="controls">
                                                <input value="<?php echo $res[0]['user_account_title']; ?>" required name="user_account_title" type="text" class="input-xlarge text-tip" id="input01" title="What is Account Title?">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Account Number:</label>
                                            <div class="controls">
                                                <input required value="<?php echo $res[0]['user_account_numb']; ?>" name="user_account_numb" type="text" class="input-xlarge text-tip" id="input01" title="Enter Account Number">
                                            </div>
                                        </div>
                                        <div style="margin-left: 32%;   width: 100%;margin-top: 20px;">
                                            <button style="width: 138px;" type="submit" class="btn btn-info">Save changes</button>
                                            <button style="width: 138px;" class="btn btn-warning">Cancel</button>
                                        </div>
                                    </div>  </form>
                            </fieldset>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>