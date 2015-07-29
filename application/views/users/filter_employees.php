<style>
    input[type="text"],[type="password"]{height:31px;}
    .tbl_tools{display:none;}
    tr{background: white;
    text-align: center;}
</style>
<div class="span12 " style="margin-left:-1px">
    <div class="widget-block">
        <div class="widget-head">
            <h5><i class="black-icons users"></i> All Employees</h5>
        </div>
        <div class="widget-content">

            <div class="widget-box">
                <table class="data-tbl-tools table">
                    <thead>
                        <tr>
                            <th class="center"> ID </th>
                            <th class="center"> User </th>
                            <th class="center"> Bio </th>
                            <th> Shift </th>
                            <th> Job Type </th>
                            <th> Salary </th>
                            <th> Status </th>
                            <th style="text-align:center;"> Contact</th>
                            <th class="center"> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($res as $row) {
                            if ($row['user_type'] != "admin") {
                                ?>
                                <tr>
                                    <td class="center"><strong><?php echo $row['user_id']; ?></strong></td>
                                    <td class="center"><span class="user-thumb">
                                            <?php
                                            if ($row['user_image'] == NULL || $row['user_image'] == "") {
                                                $pic = "thumb_dummy.jpg";
                                            } else {
                                                $pic = $row['user_image'];
                                            }
                                            ?>
                                            <img src="<?php echo base_url() . "uploads/user_images/thumbs/thumb_" . $pic; ?>" width="40" height="40" alt="User">
                                        </span></td>
                                    <td  class="center"><?php echo $row['user_first_name'] . $row['user_last_name']; ?><span class="user-position"><?php echo ucfirst($row['user_type']); ?></span></td>
                                    <td><?php getUserShift($row['user_id']); ?></td>
                                    <td><?php getUserContract($row['user_id']); ?></td>
                                    <td><?php echo "$" . $row['user_salary_rate']; ?></td>
                                    <?php
                                    if ($row['user_status'] == 1) {
                                        $class = "label-success";
                                        $status = "Active";
                                    } else {
                                        $class = "label-important";
                                        $status = "Inctive";
                                    }
                                    ?>
                                    <td><span class="label <?php echo $class ?>"><?php echo $status; ?></span></td>
                                    <td style="text-align:center;"><?php echo $row['user_phone']; ?></td>
                                    <td><div class="btn-group center">
                                            <button data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><span class="caret"></span></button>
                                            <ul class="dropdown-menu" style="text-align:left">
                                                <li><a href="<?php echo base_url() . "users/view/id/" . $row['user_id'] ?>" target="_blank"><i class="icon-file"></i> View Details</a></li>
                                                <li><a href="<?php echo base_url() . "users/edit/id/" . $row['user_id'] ?>" target="_blank"><i class="icon-edit"></i> Edit Profile</a></li>
                                                <li><a href="#"><i class="icon-trash"></i> Inactive User</a></li>
                                                <li><a href="#"><i class="icon-minus-sign"></i> Job History</a></li>
                                            </ul>
                                        </div></td>
                                </tr>
    <?php }
} ?>

                    </tbody>
                </table>
            </div>
            <div class="widget-bottom">
                <div class="pagination">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>