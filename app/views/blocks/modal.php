<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form User</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <label for="exampleInputFirstName" class="control-label">First Name</label>
                                    <input type="text" name="user[first_name]" class="form-control"
                                           value="" id="exampleInputFirstName"
                                           placeholder="First Name">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputLastName" class="control-label">Last Name</label>
                                    <input  type="text" name="user[last_name]" class="form-control"
                                            id="exampleInputLastName" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="control-label">Email</label>
                                    <input required="required" type="email" name="user[email_address]" class="form-control"
                                           placeholder="example@gmail.com">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputRole" class="control-label">Role</label>
                                    <select required="required" class="form-control" name="user[role_id]">
                                        <option value="" hidden="hidden">Choose One</option>
                                        <?php foreach($roles as $role) { ?>
                                        <option value="<?php echo $role->id; ?>"><?php echo $role->name; ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="control-label">Password</label>
                                    <input required="required" type="password" name="user[password]" class="form-control"
                                           id="exampleInputPassword1" placeholder="Password">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword2" class="control-label">Confirm Password</label>
                                    <input required="required" type="password" name="user[confirm_password]" class="form-control"
                                           id="exampleInputPassword2" placeholder="Confirm Password">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="saveUser()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->



<!--<div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-container">
            <?php
/*            $error = $this->session->userdata('error');

            if (isset($error)) { */?>
                <div class="notice notice-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php
/*                    echo $error;
                    $this->session->unset_userdata('error');
                    */?>
                </div>
            <?php /*} */?>
            <h1 id="feedbackFormTitle">Create New User</h1>
            <form action="users/create" method="post" id="signup_signupForm">
                <div class="form-group">
                    <label for="exampleInputFirstName" class="control-label">First Name</label>
                    <input type="text" name="user[first_name]" class="form-control"
                           value="" id="exampleInputFirstName"
                           placeholder="First Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputLastName" class="control-label">Last Name</label>
                    <input  type="text" name="user[last_name]" class="form-control"
                           id="exampleInputLastName" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="control-label">Email</label>
                    <input required="required" type="email" name="user[email_address]" class="form-control"
                           placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                    <label for="exampleInputRole" class="control-label">Role</label>
                    <select required="required" class="form-control" name="user[role_id]">
                        <option value="" hidden="hidden">Choose One</option>
                        <?php /*foreach($roles as $role) { */?>
                            <option value="<?php /*echo $role->id; */?>"><?php /*echo $role->name; */?></option>
                        <?php /*} */?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="control-label">Password</label>
                    <input required="required" type="password" name="user[password]" class="form-control"
                           id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2" class="control-label">Confirm Password</label>
                    <input required="required" type="password" name="user[confirm_password]" class="form-control"
                           id="exampleInputPassword2" placeholder="Confirm Password">
                </div>
                <input type="hidden" name="user[timezone]" value="UTC" id="timezoneField">
                <button type="submit" class="btn btn-success btn-block" id="signup_btnCreate">Create User</button><br>
            </form>
        </div>
    </div>
</div>-->