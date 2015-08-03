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
                            var imagename = a.replace("_thumb", "");
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
        $("#saveBio").click(function() {
            $('#myform').validate({
                rules: {
                    user_password: 'required',
                    user_c_password: {
                        equalTo: '#user_password'
                    },
                    blabla: {
                        email: true
                    }

                }, messages: {
                    blabla: {
                        email: 'Please enter a valid email address'
                    }
                }
            });
        });
    });
</script>
<style>
    select{width:243px;}
    input[type="text"],[type="password"]{height:31px;}
</style>
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
                    <h5>Add New Employee</h5>
                </div>
                <div class="widget-content">
                    <div class="widget-box">
                        <div class="well white-box">
                            <fieldset>
                                <div class="span5">
                                    <ul class="heart_icn" style="margin-bottom: 40px;margin-left: 167px;">
                                        <li>
                                            <h6>Add Biography</h6>
                                        </li>
                                    </ul>
                                    <form id="signupform" class="form-horizontal well" method="post" action="<?php echo base_url() . "users/saveBio" ?>">
                                        <div class="control-group">
                                            <label class="control-label" for="input01">First Name:</label>
                                            <div class="controls">
                                                <input required type="text" class="span10" name="user_first_name" id="user_first_name" title="Enter First Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Last Name:</label>
                                            <div class="controls">
                                                <input required id="user_last_name" name="user_last_name" type="text" class="span10"  title="Enter Last Name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Gender</label>
                                            <div class="controls">
                                                <label class="radio inline">
                                                    <input type="radio" checked="checked" value="male" id="user_gender" name="user_gender">
                                                    Male</label>
                                                <label class="radio inline">
                                                    <input type="radio" value="female" id="user_gender" name="user_gender">
                                                    Female</label>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Employee Designation</label>
                                            <div class="controls">
                                                <select name="user_type" id="user_type">
                                                    <option selected value="driver">Driver</option>
                                                    <option value="controller">Controller</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Date of Birth:</label>
                                            <div class="controls">
                                                <input required name="user_dob" type="text" class="span10" id="datepicker" title="Select Date of Birth">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Phone:</label>
                                            <div class="controls">
                                                <input required id="user_phone" name="user_phone" type="text" class="span10" title="Enter Phone Number">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input01">Email:</label>
                                            <div class="controls">
                                                <input required id="blabla" name="blabla" type="text" class="span10" title="Enter Valid Email">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input02">Set Password </label>
                                            <div class="controls">
                                                <input id="user_password" name="user_password" type="password" class="span10" title="Enter Password"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="input02">Re Type Password </label>
                                            <div class="controls">
                                                <input id="user_c_password" name="user_c_password" type="password" class="span10" title="Enter Password"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Address</label>
                                            <div class="controls">
                                                <textarea id="user_address" name="user_address" class="span10" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div style="margin-left: 32%;   width: 100%;">
                                            <button id="saveBio" style="width: 138px;" type="submit" class="btn btn-info">Save changes</button>
                                            <button style="width: 138px;" class="btn btn-warning">Cancel</button>
                                        </div>
                                    </form>
                                </div>


                            </fieldset>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>