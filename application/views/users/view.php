<style>
    select{width:281px;}
    input[type="text"],[type="password"]{height:31px;border:none;}
</style>
<?php // print_r($res);?>

<div class="container-fluid">
    <ul class="breadcrumb">
        <li><a href="#">Car Parking</a><span class="divider">&raquo;</span></li>
        <li><a href="#">Employee Management</a><span class="divider">&raquo;</span></li>
        <li class="active">Add Employee </li>
    </ul>
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-block">
                <div class="widget-head">
                    <h5>View Employee Details</h5>
                </div>
                <div class="widget-content">
                    <div class="widget-box">
                        <div class="well white-box">
                            <?php if ($this->session->flashdata('message')) { ?>
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
                                                <input readonly type="hidden" id="user_id" name="user_id" value="<?php echo $this->uri->segment(4); ?>">
                                                <input readonly  value="<?php echo $res[0]['user_first_name']; ?>" required type="text" class="input-xlarge text-tip" name="user_first_name" id="user_first_name" title="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Last Name:</label>
                                            <div class="controls">
                                                <input readonly  value="<?php echo $res[0]['user_last_name']; ?>" required id="user_last_name" name="user_last_name" type="text" class="input-xlarge text-tip" id="input01" title="Enter Last Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Gender</label>
                                            <div class="controls">
                                                <input readonly value="<?php echo ucfirst($res[0]['user_gender']); ?>" required id="user_phone" name="user_phone" type="text" class="input-xlarge text-tip" id="input01" title="Enter Phone Number">

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Employee Designation</label>
                                            <div class="controls">
                                                <input readonly value="<?php echo $res[0]['user_type']; ?>" required id="user_phone" name="user_phone" type="text" class="input-xlarge text-tip" id="input01" title="Enter Phone Number">


                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Date of Birth:</label>
                                            <div class="controls">
                                                <input readonly value="<?php echo $res[0]['user_dob']; ?>" required name="user_dob" type="text" class="input-xlarge text-tip" id="datepicker" title="Select Date of Birth">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Phone:</label>
                                            <div class="controls">
                                                <input readonly value="<?php echo $res[0]['user_phone']; ?>" required id="user_phone" name="user_phone" type="text" class="input-xlarge text-tip" id="input01" title="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Email:</label>
                                            <div class="controls">
                                                <input readonly value="<?php echo $res[0]['user_email']; ?>" id="user_email" name="user_email" type="text" class="input-xlarge text-tip" id="input01" title="Enter Email">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Address</label>
                                            <div class="controls">
                                                <textarea id="user_address" name="user_address" class="input-xlarge" rows="3">  <?php echo $res[0]['user_address']; ?></textarea>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                <form class="form-horizontal well" method="post" action="<?php echo base_url() . 'users/saveDetails' ?>">
                                    <input readonly type="hidden" id="user_id" name="user_id" value="<?php echo $this->uri->segment(4); ?>">

                                    <div class="span5" style=" border-left: 2px solid #3c8dbc ;margin-left: 123px;">
                                        <ul class="pager" style="float:right;margin-right: -27%; margin-top: -4%;">
                                            <li class="previous"><a onClick="window.history.back()"><i class="icon-chevron-left"></i> Back</a></li>
                                        </ul>
                                        <ul class="pin_icn" style="margin-left: 167px;margin-bottom: 40px;">
                                            <li>
                                                <h6>Setup Job Details</h6>
                                            </li>
                                        </ul>
                                        
                                        <div class="control-group">
                                            <label class="control-label">Assign Shift</label>
                                            <div class="controls">
                                                <input readonly type="text" id="user_id" name="user_id" value="<?php getUserShift($res[0]['user_id']); ?>">

                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Assign Airports</label>
                                            <div class="controls"><font style="font-size: 16px;">
                                                <?php
                                                $result = getEmployeeAirports($res[0]['user_id']);
                                                foreach ($result as $r) {
                                                    echo $r['airport_name'] . ", ";
                                                }
                                                ?></font>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Photo</label>
                                            <div class="controls">
                                                <span class="">
                                                    <?php
                                                    if ($res[0]['user_image'] == NULL || $res[0]['user_image'] == "") {
                                                        $pic = "dummy.jpg";
                                                    } else {
                                                        $pic = $res[0]['user_image'];
                                                    }
                                                    ?>
                                                    <img src="<?php echo base_url() . "uploads/user_images/thumbs/thumb_" . $pic; ?>" width="100" height="100" alt="User">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Set Salary:</label>
                                            <div class="controls">
                                                <input readonly value="<?php echo $res[0]['user_salary_rate']; ?>" name="user_salary_rate" type="text" class="input-xlarge text-tip" id="input01" title="Set Employee Salary per Hour">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Bank Name:</label>
                                            <div class="controls">
                                                <input readonly required value="<?php echo $res[0]['user_bank_name']; ?>" name="user_bank_name" type="text" class="input-xlarge text-tip" id="input01" title="What is Bank Name?">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Account Title:</label>
                                            <div class="controls">
                                                <input readonly value="<?php echo $res[0]['user_account_title']; ?>" required name="user_account_title" type="text" class="input-xlarge text-tip" id="input01" title="What is Account Title?">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Account Number:</label>
                                            <div class="controls">
                                                <input readonly required value="<?php echo $res[0]['user_account_numb']; ?>" name="user_account_numb" type="text" class="input-xlarge text-tip" id="input01" title="Enter Account Number">
                                            </div>
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