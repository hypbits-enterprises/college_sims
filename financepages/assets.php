<div class="contents animate hide" id="asset_accounts">
    <div class="titled">
        <h2>Finance</h2>
    </div>
    <div class="admWindow">
        <div class="top1">
            <div class="row">
                <div class="col-md-9">
                    <p>Asset Accounts</p>
                </div>
            </div>
        </div>
        <div class="middle1">
            <div class="row">
                <div class="notice1 col-md-12">
                    <!-- <button type='button' id='back_to_fees_payment_2'><i class="fa fa-arrow-left"></i> Back to Fees Payment</button> -->
                    <div class="notify">
                        <p><strong>Important:</strong></p>
                    </div>
                    <ul>
                        <li> VIEW, UPDATE AND DELETE THE SCHOOL ASSETS.</li>
                    </ul>
                </div>
            </div>
            <div class="container" id="asset-list">
                <button class="nav-bar-btns" id="register-new-asset"><i class="fa fa-plus"></i> Register New Asset <img class="hide" src="images/ajax_clock_small.gif" id="new-asset-leader"></button>
                <div id="asset-lists-notifier"></div>
                <div class="hide" id="asset-data"></div>
                <div class="table_container">
                    <h6 class="text-center my-2"><u>Asset List</u></h6>
                    <input type="hidden" name="" value="1" id="asset-page">
                    <input type="hidden" name="" value="1" id="maximum-page-asset">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <input type="text" class="text form-control w-100" id="search-assets" placeholder="Enter Keyword Here">
                        </div>
                    </div>
                    <p id="asset-notices-2"></p>
                    <div id="asset-data-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Assets Name</th>
                                    <th>Asset Category</th>
                                    <th>Date Acquired.</th>
                                    <th>Value</th>
                                    <th>rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Toyota KBX 207 A</td>
                                    <td>Motor Vehicle & Machinery</td>
                                    <td>21st Jun 2023 @ 13:04PM.</td>
                                    <td>Kes 3,000,000</td>
                                    <td>56% <i class="fas fa-arrow-up text-success"></i></td>
                                    <td><span style="font-size:12px;" class="link view_students" id="view1"><i class="fa fa-pen-fancy"></i> Edit </span></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Toyota KBX 207 A</td>
                                    <td>Motor Vehicle & Machinery</td>
                                    <td>21st Jun 2023 @ 13:04PM.</td>
                                    <td>Kes 1,000,000</td>
                                    <td>56% <i class="fas fa-arrow-down text-danger"></i></td>
                                    <td><span style="font-size:12px;" class="link view_students" id="view1"><i class="fa fa-pen-fancy"></i> Edit </span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row w-50">
                        <div class="col-sm-4">
                            <span class="btn btn-secondary btn-sm disabled" id="previous-asset-page"><i class="fa fa-arrow-left"></i><i class="fa fa-arrow-left"></i></span>
                        </div>
                        <div class="col-sm-4">
                            <span id="asset-current-page" class="text-center">Page 1 of 2</span>
                        </div>
                        <div class="col-sm-4">
                            <span class="btn btn-secondary btn-sm disabled" id="next-asset-page"><i class="fa fa-arrow-right"></i><i class="fa fa-arrow-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container hide" id="register-asset">
                <button id="back-to-assets"><i class="fa fa-arrow-left"></i> Back to suppliers </button>
                <div class="row my-2">
                    <div class="col-md-12 my-2">
                        <h6 class="text-center"><u>Register Asset</u></h6>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="asset-name" class="form-label"><b>Asset Name</b></label>
                        <input type="text" name="asset-name" id="asset-name" class="form-control w-100" placeholder="Asset Name">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="asset-category" class="form-label"><b>Asset Category</b></label>
                        <select name="asset-category" id="asset-category" class="form-control w-100">
                            <option value="" hidden>Select an Option</option>
                            <option value="1">Land</option>
                            <option value="2">Buildings</option>
                            <option value="3">Motor Vehicle</option>
                            <option value="4">Furniture & Fittings</option>
                            <option value="5">Computer & ICT Equipments</option>
                            <option value="6">Plant & Equipments</option>
                            <option value="7">Capital Work in Progress</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="asset-acquiry-date" class="form-label"><b>Date Of Acquiry (Year is the most important)</b></label>
                        <input type="date" name="asset-acquiry-date" id="asset-acquiry-date" class="form-control w-100" value="<?=date("Y-m-d")?>">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="asset-original-value" class="form-label"><b>Asset Original Value</b></label>
                        <input type="number" name="asset-original-value" id="asset-original-value" class="form-control w-100" placeholder="Original Value">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="value-acquisition-option" class="form-label"><b>Value Acquisition Option</b></label>
                        <select name="value-acquisition-option" id="value-acquisition-option" class="form-control w-100">
                            <option value="" hidden>Select an Option</option>
                            <option value="1">Straightline Method</option>
                            <option value="2">Reducing Balance Method</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="value-acquisition-percentage" class="form-label"><b>Value Acquisition Percentage</b></label>
                        <input type="number" name="value-acquisition-percentage" id="value-acquisition-percentage" class="form-control w-100" placeholder="Ex : 5% increase (type without %)">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="asset-description" class="form-label"><b>Description </b><small>(<?= date("D dS M Y") ?>)</small></label>
                        <textarea name="asset-description" id="asset-description" cols="30" rows="5" class="form-control w-100" placeholder="Write a short narative about the supplier!"></textarea>
                    </div>
                    <div class="col-md-12">
                        <div id="asset-error"></div>
                        <button id="save-assets-btn"><i class="fa fa-save"></i> Save Asset <img class="hide" src="images/ajax_clock_small.gif" id="save-assets-loader"></button>
                    </div>
                </div>
            </div>
            <!-- <div class="container p-1 mx-auto hide" id="edit_suppliers">
                <button id="return_to_supplier_list_2"><i class="fa fa-arrow-left"></i> Back to suppliers </button>
                <div class="row my-2">
                    <div class="col-md-12 my-2">
                        <h4 class="text-center"><u>View Supplier</u> <img class="hide" src="images/ajax_clock_small.gif" id="supplier_data_loaders"></h4>
                    </div>
                    <div class="cont my-2">
                        <div class="container ml-3">
                            <span class="btn btn-sm btn-secondary" id="delete_supplier"><i class="fas fa-trash"></i> Delete</span>
                        </div>
                        <div class="message_contents mt-3 hide" id="delete_supplier_window">
                            <label class="form-control-label"><u>Confirm:</u></label>
                            <p>- Are you sure you want to delete this supplier?</p>
                            <p>- All your supplier data will be deleted and actions will not be reversible.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <button id="confirm_delete_supplier"><i class="fas fa-trash"></i> Delete <img class="hide" src="images/ajax_clock_small.gif" id="delete_supplier_loader"></button>
                                </div>
                                <div class="col-md-6">
                                    <button id="cancel_delete_supplier"><i class="fas fa-x"></i> Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="company_name" class="form-label"><b>Company Name</b></label>
                        <input type="hidden" name="" id="supplier_id">
                        <input type="text" name="company_name" id="company_name_2" class="form-control w-100" placeholder="Company Name">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="supplier_prefix" class="form-label"><b>Supplier Prefix</b></label>
                        <select name="supplier_prefix" id="supplier_prefix_2" class="form-control w-100">
                            <option value="" hidden>Select an Option</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Sir">Sir</option>
                            <option value="Madam">Madam</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="supplier_name_2" class="form-label"><b>Supplier Name</b></label>
                        <input type="text" name="supplier_name_2" id="supplier_name_2" class="form-control w-100" placeholder="Supplier Name">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="supplier_phone_2" class="form-label"><b>Supplier Phone</b></label>
                        <input type="text" name="supplier_phone_2" id="supplier_phone_2" class="form-control w-100" placeholder="Phone Number">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="supplier_email_2" class="form-label"><b>Supplier Email</b></label>
                        <input type="text" name="supplier_email_2" id="supplier_email_2" class="form-control w-100" placeholder="Email Address">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="supplier_address_2" class="form-label"><b>Supplier Address</b></label>
                        <input type="text" name="supplier_address_2" id="supplier_address_2" class="form-control w-100" placeholder="Supplier Address">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="supplier_bank_name" class="form-label"><b>Bank Name</b></label>
                        <input type="text" name="supplier_bank_name" id="supplier_bank_name_2" class="form-control w-100" placeholder="Bank Name">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="account_no" class="form-label"><b>Bank Account No</b></label>
                        <input type="text" name="account_no" id="account_no_2" class="form-control w-100" placeholder="Bank Account No.">
                    </div>
                    <div class="col-md-12">
                        <label for="supplier_note" class="form-label"><b>Note</b></label>
                        <textarea name="supplier_note" id="supplier_note_2" cols="30" rows="5" class="form-control w-100" placeholder="Write a short narative about the supplier!"></textarea>
                    </div>
                    <div class="col-md-12">
                        <div id="supplier_errors_2"></div>
                        <button id="save_suppliers_2"><i class="fa fa-save"></i> Update Supplier <img class="hide" src="images/ajax_clock_small.gif" id="save_suppliers_loader_2"></button>
                    </div>
                </div>
                <hr class="my-1 p-1">
                <div class="hide" id="supplier_payment_bills"></div>
                <h6 class="my-2 text-center"><u>Bills & Payments</u></h6>
                <div class="container p-1 row">
                    <div class="col-md-6">
                        <h6 class="text-center">Bills</h6>
                        <button id="add_bills"><i class="fa fa-plus"></i> Add Bills</button>
                        <hr class="my-2">
                        <div class="" id="supplier_bill_tables">
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Bill Name</th>
                                    <th>Amount</th>
                                    <th>Date Registered</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Fire Extinguisher Supplies</td>
                                    <td>Kes 10,000</td>
                                    <td>Mon 5th Jun 2024</td>
                                    <td><span class="link"><i class="fas fa-eye"></i> View</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-center">Payments</h6>
                        <button id="add_payments"><i class="fa fa-plus"></i> Make Payment</button>
                        <hr class="my-2">
                        <div class="" id="supplier_payment_table">
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Paid Amount</th>
                                    <th>Date Paid</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Kes 10,000</td>
                                    <td>Mon 5th Jun 2024</td>
                                    <td><span class="link"><i class="fas fa-eye"></i> View</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="bottom1">
            <p>Managed by Ladybird</p>
        </div>
    </div>
</div>