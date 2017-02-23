<!--======== site login modal ==========-->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="exampleModalLabel">Sign In</h4>
            </div>
            <div class="modal-body clearfix">
                <form>
                    <div class="row col-md-12">
                        <div class="form-group clearfix">
                            <label class="col-md-2 control-label text-primary">Email Id</label>
                            <div class="col-md-10">
                                <input type="text" name="LoginForm['username']" class="form-control" id="loginform-username" placeholder="Username"/>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-12">
                        <div class="form-group clearfix">
                            <label class="col-md-2 control-label text-primary">Password</label>
                            <div class="col-md-10">
                                <input type="password" name="LoginForm['password']" class="form-control" id="loginform-password" placeholder="Password"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
<!--======== end site login modal ==========-->

<!--======== site signup modal ==========-->
<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="exampleModalLabel">Sign Up</h4>
            </div>
            <div class="modal-body clearfix">
                <form id="RegistrationFrom" name="RegistrationFrom" method="post" action="">
                    <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">UserName</label>
                                <input type="text" name="UserMaster['username']" class="form-control" id="usermaster-username" placeholder="Username"/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">First Name</label>
                                <input type="text" name="UserMaster['first_name']" class="form-control" id="usermaster-first_name" placeholder="First Name"/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">Last Name</label>
                                <input type="text" name="UserMaster['last_name']" class="form-control" id="usermaster-last_name" placeholder="Last Name"/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">Email</label>
                                <input type="text" name="UserMaster['email']" class="form-control" id="usermaster-email" placeholder="Email Id"/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">Mobile No</label>
                                <input type="text" name="UserMaster['mobile']" class="form-control" id="usermaster-mobile" placeholder="Mobile Number"/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">Gender</label>
                                <select name="UserMaster[gender]" id="usermaster-gender" class="form-control">
                                    <option value="">Select Gender....</option>
                                    <option value="Male">Male</option>
                                    <option value="Femail">Femail</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">Date of Birth</label>
                                <div class="input-group">
                                    <input type="text" style="cursor: pointer;" name="UserMaster['dob']" class="form-control date-picker" readonly="true" id="usermaster-dob" placeholder="Date of Birth"/>
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">Password</label>
                                <input type="password" name="LoginForm['password']" class="form-control" id="usermaster-password" placeholder="Password"/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group clearfix">
                                <label class="control-label text-primary">Confirm Password</label>
                                <input type="password" name="LoginForm['cnf_password']" class="form-control" id="usermaster-cnf_password" placeholder="Retype Password"/>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group clearfix">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--======== end site login modal ==========-->