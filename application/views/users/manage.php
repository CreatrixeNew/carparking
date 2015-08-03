<script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        M_PATH = '<?php echo base_url(); ?>';
        
        
        value =  $("#table_search").html();
        value = $.trim(value);
//        alert(value);
        
        if(value == "ID"){
            $("#table_search").html(value).removeAttr('class');
        }
        
        valueClass =  $(".center sorting").html();
        valueClass = $.trim(value);       
        
        if(valueClass == "Contact"){
            alert(valueClass);
            $("#table_search").html(valueClass).removeAttr('class');
        }

  $("#filtered_table").click(function() {
      
      value =  $("#table_search").html();
        value = $.trim(value);
        
//       if(value == "ID"){
//            alert(value);
            $("#table_search").html(value).removeAttr('class');
//        }
      
    });
        $("#sort").click(function() {

            date = $("#datepicker").val();
            sortBy = $("#sort_by").val();

            if (date == "") {
                $("#datepicker").css('border', '1px solid red');
            }
            else {
                $("#filtered_table").load(M_PATH + "users/sortEmployees?date=" + date + "&sortBy=" + sortBy);
            }
        });

        $("#filter").change(function() {

            $(".filter_field").removeAttr('disabled');

        });


        $("#filter_submit").click(function() {

            keyword = $(".filter_field").val();

            if (keyword == "") {
                $(".filter_field").css('border', '1px solid red');
            }
            else if (keyword == "Active") {
                $("#filtered_table").load(M_PATH + "users/filterEmployees?status=1");
            }
            else {
                $("#filtered_table").load(M_PATH + "users/filterEmployees?status=0");
            }


        });

        $('a[id ^="publish_"]').click(function() {

            var id = this.id.replace('publish_', '');
            data = $("#status_" + id).html();
//            alert(data);
//            user_status = "";

            Activate = '<span class="label label-success">Active</span>';
//                  alert(pics);

            if (data == Activate) {
//                      alert("Active this user");
                $("#status_" + id).html("<span class='label label-important'>Inactive</span>");
                $("#publish_" + id).html("<i class='icon-trash'></i>Activate User");
                user_status = 0;
//                alert(user_status);
            }
            else {
                $("#status_" + id).html("<span class='label label-success'>Active</span>");
                $("#publish_" + id).html("<i class='icon-trash'></i>Deactivate User");
                user_status = 1;
                alert(user_status);
            }

            url = '<?php echo base_url() . 'users/publish'; ?>';
            $.post(url, {id: id, user_status: user_status}, function(data) {
            });

        });

    });
</script>

<style>
    input[type="text"],[type="password"]{height:31px;}

    .tbl_tools{display:none;}
    tr{background: white;
       text-align: center;}
    </style>
    <div class="container-fluid">
    <ul class="breadcrumb">
        <li><a href="#">Car Parking</a><span class="divider">&raquo;</span></li>
        <li><a href="#">Employee Management</a><span class="divider">&raquo;</span></li>
        <li class="active">Employee List</li>
    </ul>
    <div class="row-fluid">
        <div class="span3">
            <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
                <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #F2A0A0;overflow: hidden;"> <span class="dashboard-icons-colors check_sl" style="float:left;"></span><font style="color:#ffffff;font-size: 24px;"><?php echo getAllActiveUsers(); ?></font>
                        <h6 style="color:#ffffff;">ACTIVE EMPLOYEES </h6>
                    </a> </div>
            </div>
        </div>
        <div class="span3">
            <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
                <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #A0D1F2;overflow: hidden;"><span class="dashboard-icons-colors customers_sl" style="float:left;"></span><font style="color:#ffffff;font-size: 24px;"><?php echo getAllUsers(); ?></font>
                        <h6 style="color:#ffffff;">TOTAL EMPLOYEES</h6>
                    </a> </div>
            </div>
        </div>
        <div class="span3">
            <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
                <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #F2D4A0;overflow: hidden;"> <span class="dashboard-icons-colors current_work_sl" style="float:left;"></span> <font style="color:#ffffff;font-size: 24px;"><?php echo getAllDrivers(); ?></font>
                        <h6 style="color:#ffffff;">TOTAL DRIVERS </h6>
                    </a> </div>
            </div>
        </div>
        <div class="span3">
            <div class="dashboard-wid-wrap" style="background: none;border-radius: 0px;">
                <div class="dashboard-wid-content"> <a href="#" style="border-radius:0px; background: #AAD698;overflow: hidden;"> <span class="dashboard-icons-colors busy_sl" style="float:left;"></span> <font style="color:#ffffff;font-size: 24px;"><?php echo getAllInactiveUsers(); ?></font>
                        <h6 style="color:#ffffff;">INACTIVE EMPLOYEES</h6>
                    </a> </div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <div class="nonboxy-widget" style="  background: #fcfcfc none repeat scroll 0 0; border-color: #f3f3f3 #f3f3f3 #f3f3f3 #faa732;border-style: solid;border-width: 1px 1px 1px 4px; padding: 9px;">
                <div class="widget-head">
                    <h5>Sort</h5>
                </div>
                <input id="datepicker"  type="text" style="width:48%;">

                <select style=" width: 49%;" id="sort_by">
                    <option selected value="ASC">Ascending </option>
                    <option value="DESC">Descending</option>
                </select>
                <a class="info_t btn btn-warning" id="sort" style="width:94%">Sort</a> </div>
        </div>
        <div class="span6">
            <div class="nonboxy-widget" style="  background: #fcfcfc none repeat scroll 0 0; border-color: #f3f3f3 #f3f3f3 #f3f3f3 #5bb75b;border-style: solid;border-width: 1px 1px 1px 4px; padding: 9px;">
                <div class="widget-head">
                    <h5>Filter</h5>
                </div>
                <select id="filter" style=" width:48%;">
                    <option>Select</option>
                    <option value="status">By Status</option>
                </select>
                <input disabled="TRUE" id="typeahead" data-items="2" data-provide="typeahead" data-source="[&quot;Active&quot;,&quot;Inactive&quot;]" class="filter_field" type="text" style="width:48%;">
                <a id="filter_submit" class="btn btn_filter" href="#" style="width:95.5%">Filter</a> </div>
        </div>
    </div>
    <div class="row-fluid" id="filtered_table">
        <div class="span12 ">
            <div class="widget-block">
                <div class="widget-head">
                    <h5><i class="black-icons users"></i> All Employees</h5>
                </div>
                <div class="widget-content">

                    <div class="widget-box">
                        <table class="data-tbl-tools table" style="font-size:12px;">
                            <thead>
                                <tr style="font-size:12px;">
                                    <th class="center"> ID </th>
                                    <th class="center"> Image </th>
                                    <th class="center"> User Info </th>
                                    <th> Shift </th>
                                    <th> Contract Type </th>
                                    <th> Salary </th>
                                    <th> Status </th>
                                    <th style="text-align:center;"> Contact</th>
                                    <th class="center"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($res as $row) {
                                    if ($row['user_type'] != "admin") {
                                        ?>
                                        <tr>
                                            <td class="center"><strong><?php echo $row['user_id']; ?></strong></td>
                                            <td class="center"><span class="user-thumb">
                                                    <?php
                                                    if ($row['user_image'] == NULL || $row['user_image'] == "") {
                                                        $pic = "dummy.jpg";
                                                    } else {
                                                        $pic = $row['user_image'];
                                                    }
                                                    ?>
                                                    <img src="<?php echo base_url() . "uploads/user_images/" . $pic; ?>" width="40" height="40" alt="User">
                                                </span></td>
                                            <td  class="center"><?php echo $row['user_first_name'] ." ". $row['user_last_name']; ?><span class="user-position"><?php echo ucfirst($row['user_type']); ?></span></td>
                                            <td><?php getUserShift($row['user_id']); ?></td>
                                            <td><?php getUserContract($row['user_id']); ?></td>
                                            <td ><?php echo "$" . $row['user_salary_rate']; ?></td>
                                            <?php
                                            if ($row['user_status'] == 1) {
                                                $class = "label-success";
                                                $status = "Active";
                                                $button = "Deactivate User";
                                            } else {
                                                $class = "label-important";
                                                $status = "Inctive";
                                                $button = "Activate User";
                                            }
                                            ?>
                                            <td id="status_<?php echo $row['user_id']; ?>"><span class='label <?php echo $class ?>'><?php echo $status; ?></span></td>
                                            <td style="text-align:center;"><?php echo $row['user_phone']; ?></td>
                                            <td><div class="btn-group center">
                                                    <button data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><span class="caret"></span></button>
                                                    <ul class="dropdown-menu" style="text-align:left">
                                                        <li><a href="<?php echo base_url() . "users/view/id/" . $row['user_id'] ?>" ><i class="icon-file"></i> View Details</a></li>
                                                        <li><a href="<?php echo base_url() . "users/edit/id/" . $row['user_id'] ?>" target="_blank"><i class="icon-edit"></i> Edit Profile</a></li>
                                                        <li><a id="publish_<?php echo $row['user_id'] ?>"><i class='icon-trash'></i><?php echo $button ?></a></li>
                                                        <li><a href="#"><i class="icon-minus-sign"></i> Job History</a></li>
                                                    </ul>
                                                </div></td>
                                        </tr>
                                    <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>