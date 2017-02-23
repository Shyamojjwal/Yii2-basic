<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="main">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="javascript:;">Pages</a></li>
            <li class="active">Create new account</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar col-md-3 col-sm-3">
                <ul class="list-group margin-bottom-25 sidebar-menu">
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Login/Register</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Restore Password</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> My account</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Address book</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Wish list</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Returns</a></li>
                    <li class="list-group-item clearfix"><a href="javascript:;"><i class="fa fa-angle-right"></i> Newsletter</a></li>
                </ul>
            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="col-md-9 col-sm-9">
                <h1>Create an account</h1>
                <div class="content-form-page">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <?php
                            $form = ActiveForm::begin([
//                                        'id' => 'active-form',
                                        'options' => [
                                            'class' => 'form-horizontal',
                                            'enctype' => 'multipart/form-data'
                                        ],
                                    ])
                            ?>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">User Name :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'username')->textInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">First Name :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'first_name')->textInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">Last Name :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'last_name')->textInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">Email :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'email')->textInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">Mobile :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'mobile')->textInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">Date of Birth :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'dob')->textInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">Password :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3 text-primary">Retype Password :</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'cnf_password')->passwordInput(['class' => 'form-control'])->label(false); ?>
                                </div>
                            </div>
                            <div class="form-actions text-center">
                                <button type="submit" class="btn btn-lg yellowLight">SUbmit</button>
                            </div>
                            <?php ActiveForm::end() ?>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT -->
            </div>
            <!-- END SIDEBAR & CONTENT -->
        </div>
    </div>