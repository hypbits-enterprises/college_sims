<div class="contents animate hide" id="my_reports_page">
    <div class="titled">
        <h2>Generate Reports</h2>
    </div>
    <div class="admWindow ">
        <div class="top1">
            <p>Reports</p>
            <p class="" id="set_reports"></p>
            <p class="hide" id="set_reports2"></p>
        </div>
        <div class="middle1">
            <div class="conts border-bottom border-secondary border-dashed p-2">
                <p><b>Note:</b></p>
                <p>At this window you are previledged to generate reports of the whole school starting from the basic student information to the complex financial statements.</p>
                <p>We have different sections that generate different reports</p>
            </div>
            <div class="container border border-secondary rounded my-2 p-2">
                <h5 class="text-center">Administration Section Reports</h5>
                <form method="POST" action="reports/reports.php" target="_blank" class="form-group row">
                    <div class="col-md-4">
                        <label for="select_entity" class="form-label">Select Entity</label>
                        <select name="select_entity" id="select_entity" class="form-control" required>
                            <option value="" hidden>Select an Entity</option>
                            <option value="student">Students</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>
                    <div class="col-md-4 student my-2 hide" id="entity_option">
                        <label for="select_student_option" class="form-label">Select an option</label>
                        <select name="select_student_option" id="select_student_option" class="form-control">
                            <option value="" hidden>Select an option</option>
                            <option value="all_students">Student Information</option>
                            <option value="students_admitted">Students Admitted</option>
                            <option value="school_in_attendance">School Attendance</option>
                            <option value="show_alumni">Alumni</option>
                        </select>
                    </div>
                    <div class="col-md-4 student ctrl my-2 hide" id="date_select_report">
                        <label for="select_date" class="form-label">Select date</label>
                        <input type="date" name="select_date" id="select_date" class="form-control" max="<?php echo date("Y-m-d") ?>">
                    </div>
                    <div class="col-md-4 student ctrl my-2 hide" id="class_select_report">
                        <label for="select_report_class" class="form-label">Select Class<img src="images/ajax_clock_small.gif" id="class_load_report" class="hide"></label>
                        <span id="reports_classes"></span>
                    </div>
                    <div class="col-md-8 student ctrl my-2 row hide" id="between_dates">
                        <div class="col-md-6">
                            <label for="from_date_report" class="form-label" id="">From:</label>
                            <input type="date" name="from_date_report" id="from_date_report" class="form-control" max="<?php echo date("Y-m-d") ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="to_date_report" class="form-label" id="">To:</label>
                            <input type="date" name="to_date_report" id="to_date_report" class="form-control" max="<?php echo date("Y-m-d") ?>">
                        </div>
                    </div>
                    <!-- admin name -->
                    <div class="col-md-4 admin hide" id="staff_options_two">
                        <label for="staff_options" class="form-label">Staff Options</label>
                        <select name="staff_options" id="staff_options" class="form-control">
                            <option value="" hidden>Select an option</option>
                            <option value="staff_details">My Staff Details</option>
                            <option value="logs">Staff Logs</option>
                            <option value="class_teachers">Class Teachers</option>
                        </select>
                    </div>
                    <div class="col-md-4 admin ctrl my-2 hide" id="date_select_staff">
                        <label for="select_date_staff" class="form-label">Select date</label>
                        <input type="date" name="select_date_staff" id="select_date_staff" class="form-control" max="<?php echo date("Y-m-d") ?>">
                    </div>
                    <div>
                        <button class="block_btn" type="submit" name="pdf"  id="generate_button"><i class="fas fa-file-pdf"></i> PDF</button>
                        <button class="block_btn" type="submit" name="xslx"  id="generate_button_xslx"><i class="fas fa-file-excel"></i> Excel</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="container border border-secondary rounded my-2 p-2">
                <h5 class="text-center">Finance Reports</h5>
                <div id="fees_reminder_message" class="hide">
                    <div class="container">
                        <p style="color: red;"><b> Please Note:</b></p>
                        <p>Hello!!, below are some tags that can be used when composing the fees reminder message for the parents. These tags represents the dynamic data of the students. For example Student Names are not the same. So when the tag is included on the message the system will replace the tag with the data respectively.</p>
                    </div>
                    <div class="container">
                        <div class="row w-50">
                            <div class="col-md-6">
                                <p><b><u>Tag Name</u></b></p>
                            </div>
                            <div class="col-md-6">
                                <p><b><u>Tag</u></b></p>
                            </div>
                        </div>
                        <div class="row w-50">
                            <div class="col-md-6">
                                <p><b>Student Name:</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>[student_name]</p>
                            </div>
                        </div>
                        <div class="row w-50">
                            <div class="col-md-6">
                                <p><b>Student Arrears:</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>[student_arrears]</p>
                            </div>
                        </div>
                        <div class="row w-50">
                            <div class="col-md-6">
                                <p><b>Student Fees Paid by Student:</b></p>
                            </div>
                            <div class="col-md-6">
                                <p>[student_fees_paid]</p>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST" action="reports/reports.php" target="_blank"  class="form-group row my-2">
                    <div class="col-md-4">
                        <label for="finance_entity" class="form-label">Select an option</label>
                        <select name="finance_entity" id="finance_entity" class="form-control">
                            <option value="" hidden>Select an option</option>
                            <option value="fees_collection">Fees Collection</option>
                            <option value="class_balances">Student Fees Balances</option>
                            <option value="fees_reminders">Fees Reminders</option>
                            <option value="fees_structure">Fees Structure</option>
                            <option value="payroll_information">Payslip Information</option>
                            <option value="expenses">Expenses</option>
                        </select>
                    </div>
                    <div class="col-md-4 hide" id="expense_cats_windows">
                        <label for="expense_categorized" class="form-label">Expense Categories<img src="images/ajax_clock_small.gif" id="expense_cats_loaders" class="hide"></label>
                        <p id="exp_cat_select_holder"></p>
                    </div>
                    <div class="col-md-4 student_opt hide">
                        <label for="period_selection" class="form-label">Select period</label>
                        <select name="period_selection" id="period_selection" class="form-control w-100">
                            <option value="" hidden>Select period</option>
                            <option value="specific_date">Specific Date</option>
                            <option value="period">Time Period</option>
                        </select>
                    </div>
                    <div class="col-md-8 row stud_fin hide" id="time_period">
                        <div class="col-md-6">
                            <label for="from_date_finance" class="form-label">From</label>
                            <input type="date" name="from_date_finance" id="from_date_finance" class="form-control" max="<?php echo date("Y-m-d");?>">
                        </div>
                        <div class="col-md-6">
                            <label for="to_date_finance" class="form-label">To</label>
                            <input type="date" name="to_date_finance" id="to_date_finance" class="form-control" max="<?php echo date("Y-m-d");?>">
                        </div>
                    </div>
                    <div class="col-md-4 stud_fin hide" id="specific_date">
                        <label for="specific_date_finance" class="form-label">Select Date</label>
                        <input type="date" name="specific_date_finance" id="specific_date_finance" class="form-control" max="<?php echo date("Y-m-d");?>">
                    </div>
                    <div class="col-md-8 row stud_fin hide" id="stud_opt_fin">
                        <div class="col-md-6">
                            <label for="student_options" class="form-label">Select student options</label>
                            <select name="student_options" id="student_options" class="form-control">
                                <option value="" hidden>Select student options</option>
                                <option value="byClass">By Class</option>
                                <!-- <option value="byAll">All Students</option> -->
                                <option value="bySpecific">Specific Students</option>
                            </select>
                        </div>
                        <div class="col-md-6 hide" id="specific_stud_admno">
                            <label for="student_admno_in" class="form-label">Student Admission Number</label>
                            <div class="autocomplete">
                                <input type="text" name="student_admno_in" id="student_admno_in" class="form-control" placeholder="Enter Admission No">
                            </div>
                        </div>
                        <div class="col-md-6 hide" id="specific_class">
                            <label for="student_class_fin" class="form-label">Select class<img src="images/ajax_clock_small.gif" id="class_fin_in_load" class="hide"></label>
                            <span id="class_fin_in"></span>
                        </div>
                    </div>
                    <div class="col-md-6 hide" id="compose_reminder_message">
                        <label for="reminder_message" class="form-label" >Reminder Message</label>
                        <textarea name="reminder_message" id="reminder_message" maxlength="300" class="form-control" cols="30" rows="5" placeholder="Reminder Message">Praise God, You are kindly reminded to clear [student_name]`s Fees balance of [student_arrears] by Thu 16th Jun 2022. This Term you have paid [student_fees_paid]</textarea>
                    </div>
                    <div class="col-md-6 hide" id="staff_list_windoweds">
                        <label for="mystaff_lists_select" class="form-label" >Staff List<img src="images/ajax_clock_small.gif" id="staff_list_windoweds_load" class="hide"></label>
                        <p id="mystaff_lists"></p>
                    </div>
                    <div class="col-md-12">
                        <button class="block_btn" type="submit" name="pdf"  id="generate_button_pdf"><i class="fas fa-file-pdf"></i> Pdf</button>
                        <button class="block_btn" type="submit" name="xslx"  id="generate_button_xlsx_2"><i class="fas fa-file-excel"></i> Excel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="bottom1">
            <p>Managed by Ladybird</p>
        </div>
    </div>
</div>