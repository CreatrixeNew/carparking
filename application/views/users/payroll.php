<style>
    .pagination{display:none;}
    .tbl_tools{display:none;}
    input[type="text"],[type="password"]{height:31px;}
</style>   
<div class="container-fluid">
                <ul class="breadcrumb">
                    <li><a href="#">Car Parking</a><span class="divider">&raquo;</span></li>
                    <li><a href="#">Employee Management</a><span class="divider">&raquo;</span></li>
                    <li class="active">Payroll</li>
                </ul>

                <div class="row-fluid">

                    <div class="span12 ">
                        <div class="widget-block">
                            <div class="widget-head">
                                <h5><i class="black-icons users"></i> Salaries & Hours</h5>
                            </div>
                            <div class="widget-content">
                    
                                <div class="widget-box">
                                    <table class="data-tbl-tools table" style="font-size:12px;">
                                        <thead>
                                            <tr style="font-size:12px;">
                                                <th class="center"> ID
                                                </th>
                                                <th class="center"> User </th>
                                                <th class="center"> Bio </th>
                                                <th> Shift </th>
                                                <th> Total Salary </th>
                                                <th> Salary Per Hour </th>

                                                <th> Worked Hours</th>
                                                <th>Payment</th>
                                                <th> Status </th>
                                                <th class="center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>       <?php
                                foreach ($res as $row) {
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
                                                <td>$2999</td>
                                                <td ><?php echo "$" . $row['user_salary_rate']; ?></td>
                                                <td>50</td>
                                                <td><span class="color-icons money_dollar_co"></span> <a href="<?php echo base_url()."users/proceedPayment/id/".$row['user_id']; ?>">Receipt Payment</a></td>
                                                <td><span class="label label-success">PAID</span></td>

                                                <td><div class="btn-group pull-right">
                                                        <button data-toggle="dropdown" class="btn dropdown-toggle"><i class="icon-cog"></i><span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="<?php echo base_url()."users/view/id/".$row['user_id']; ?>"><i class="icon-file"></i> View User</a></li>
                                                            <li><a href="<?php echo base_url()."users/proceedPayment/id/".$row['user_id']; ?>"><i class="icon-edit"></i> Salary History</a></li>
                                                            <li><a href="<?php echo base_url()."users/calculator/id/".$row['user_id']; ?>"><i class="icon-minus-sign"></i>Calculate Salary</a></li>
                                                        </ul>
                                                    </div></td>
                                </tr><?php }} ?>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>