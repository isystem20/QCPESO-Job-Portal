<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Employer Registration</h3>
                <h6 class="text-muted">Add New Employer</h6>

            </div>
            <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Transaction</li>
                        <li class="breadcrumb-item">Establishment</li>
                        <li class="breadcrumb-item active">Add New Employer</li>
                    </ol>
            </div>
            <div>
                <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h2>Company Details</h2>
            <?php echo form_open('admin/webposts/add','id="webpostform"'); ?>
                <div class="row p-t-20">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Company Acronym</label>
                            <input type="text" name="acronym" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">TIN</label>
                            <input type="number" name="tin" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Permit Issued Date</label>
                            <input type="date" name="permit" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row p-t-20">
                    <div class="col-md-6">
                        <div class="form-group has-success" ">
                                            <label class="control-label ">Establishment Type</label>
                                            <select class="form-control custom-select" name="establishment">
            
                                            </select>

                                         </div>
                                    </div>

                                    <div class="col-md-6 ">
                                       <div class="form-group has-success ">
                                            <label class="control-label ">Industry Type</label>
                                            <select class="form-control custom-select "
                                            name="industry">
                                                <option value="1">Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                    </div>
                                    </div>
                                </div>


                <div class="row p-t-20">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Company Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                    </div>

                    
                </div>


                <div class="row">
                    <div class="col-12">
                            <div class="form-actions">
                                <button type="submit" id="sub-btn" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
