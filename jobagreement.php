<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br>

    <style>
        .main {
            / width: 100px;/ margin: 50px auto;
        }

        text input.has-search .form-control {
            padding-left: 2.375rem;
        }

        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 9.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }

        .myClass {
            margin-top: 30px;
            margin-right: 10px;
            margin-left: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .container {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }



        .container input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
        }

        mouse-over,
        .container:hover input~.checkmark {
            background-color: #ccc;
        }


        .container input:checked~.checkmark {
            background-color: #2196F3;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .container input:checked~.checkmark:after {
            display: block;
        }

        .container .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }
    </style>


    <form>
        <div class="form-class align-items-center d-flex my-4">
            <div class="col-auto">
                <h5 class="text-dark font-weight-bolder my-4">Job Agreement</h5>
            </div>
            <div class="form-group has-search col-auto col-4">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control" placeholder="Search" id="search">
            </div>

            <div class="form-group col-auto ">
                <button type="button" class="btn btn-dark"><i class="fa fa-arrow-up" aria-hidden="true"></i>&nbsp; &nbsp; Upload Template</button>


                <!-- Large modal -->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add New Template</button>
            </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Template</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>


                        </div>
                        <div class="modal-body col-12">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-12 ">
                                        <label for="inputEmail4">Template</label>
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="" />
                                        <h6><span id="first_name" style="color:red;"></span></h6>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Question Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" placeholder="" />
                                        <h6><span id="last_name" style="color:red;"></span></h6>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputEmail4">Question Type</label>
                                        <select class="form-control" name="role-type" id="role" name="role">

                                            <option value="one">One Agreement</option>
                                            <option value="Two">Two Agreement</option>
                                            <option value="Three">Three Agreement</option>
                                            <option value="Four">Four Agreement</option>
                                            <option value="Five">Five Agreement</option>
                                            <option value="Six">Six Agreement</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2 my-4">
                                        <div class="form-group">
                                            <!-- <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label> -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <span>Required</span>

                                            </div>
                                            <label class="container">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>

                                            </label>
                                            <span>Required</span>

                                        </div>
                                        <fieldset>
                                            <legend>Choose your interests</legend>
                                            <div>
                                                <input type="checkbox" id="coding" name="interest" value="coding">
                                                <label for="coding">Coding</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="music" name="interest" value="music">
                                                <label for="music">Music</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <i class="fa fa-trash fa-3x text-danger" aria-hidden="true"></i>
                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Labal</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="" />
                                        <h6><span id="username1" style="color:red;"></span></h6>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="" />
                                        <h6><span id="pass_word" style="color:red;"></span></h6>
                                    </div>
                                </div>
                                <div class="form-row">
                                    user type
                                    <div class="form-group col-md-6">
                                        <label for="role-type">User type</label>
                                        <select class="form-control" name="role-type" id="role" name="role">
                                            <option value="Admin">Select User Type</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Employee">Employee</option>
                                            <option value="Technician">Technician</option>
                                        </select>
                                    </div>
                                    <div class="card form-group col-md-6">
                                        <p> Active/Inactive :</p>
                                        <label class="switch">
                                            <input type="checkbox" id="switch1" name="switch1">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>




        

    </form>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">


                <table class="table table-bordered" id="mytable">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Template Name</th>
                            <th scope="col">Active/Inactive</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Basic-Info</td>
                            <td>Active</td>


                            <td>
                                <button type="button" class="btn mx-1" name="edit">
                                    <i class="fa fa-pencil text-warning"></i>
                                </button>
                                <button type="button" class="btn mx-2" name="delete">
                                    <i class="fa fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <?php include_once('footer.php') ?>