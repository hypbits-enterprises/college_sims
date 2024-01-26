<div class="contents animate hide" id="finance_statement">
    <div class="titled">
        <h2>Financial Report</h2>
    </div>
    <div class="admWindow">
        <div class="top1">
            <p>Financial statements</p>
        </div>
        <div class="middle1">
            <div class="notice1">
                <div class="notify">
                    <p><strong>Important:</strong></p>
                </div>
                <p>- At this window you will be able to view the different account statements basing on the financial information collected over time.</p>
                <p>- Select different option to view your information differently.</p>
                <p>- The  main financial statements are:</p>
                        <li class = "margin-3px">Income statement</li>
                        <!-- <li class = "margin-3px">Balance sheet <span class="banner">Coming soon</span></li> -->
                        <li class = "margin-3px">Cash flow statement</li>
            </div>
            <div class="cont row border-top border-bottom border-dark py-3 my-2">
                <div class="col-md-4">
                    <label for="cash_flow_statement" class="form-control-label">Cash Flow Statement</label>
                    <select name="cash_flow_statement" id="cash_flow_statement" class="form-control w-100">
                        <option value="" hidden>Select an Option</option>
                        <option value="income_statement">Income Statement Termly Report</option>
                        <option value="income_statement_quarterly">Income Statement Quaterly Report</option>
                        <option value="annual_report">Annual Cashflow Report</option>
                        <option value="quarterly_report_sep">Quaterly Cashflow Report September</option>
                        <option value="quarterly_report_dec">Quaterly Cashflow Report December</option>
                        <option value="quarterly_report_mar">Quaterly Cashflow Report March</option>
                        <option value="quarterly_report_jun">Quaterly Cashflow Report June</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="year_of_statement" class="form-control-label">Year of Statement</label>
                    <select name="year_of_statement" id="year_of_statement" class="form-control w-100">
                        <option value="" hidden>Select an option</option>
                        <?php
                            for ($index=((date("Y")*1)+1); $index >= 2023; $index--) {
                                echo "<option ".((date("Y")*1) == $index ? "selected" : "")." value='".$index."'>".$index."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <button class="mx-auto" id="generate_finance_reports">Generate Reports</button>
                </div>
            </div>
            <div class="table_holders">
                <div class="my-2" id = "finance_statements"></div>
                <div class="my-2" id="balanced_sheet"></div>
            </div>
        </div>
        <div class="bottom1">
            <p>Managed by Ladybird</p>
        </div>
    </div>
</div>