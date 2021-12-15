<?php include_once('header.php'); ?>
<?php include_once('sidebar.php'); ?>
<section class="home-section">
    <?php include_once('navbar.php') ?>
    </br></br></br><br>

    <div>
        <form>

            <h5 class="text-dark font-weight-bolder my-4 col-3">Job visit Module</h5>
            <input type="search" name="search" id="searchfield" style="margin-left: 20px;" onkeyup="" placeholder="Search Template">

            <button type="button" id="showinputfrom" class="btn btn-primary">^upload Template</button>
            <button type="button" id="showinputfrom" class="btn btn-primary">+New Template</button>

       </form>
       
    </div>



    <div class="container">
        <!-- Search form -->

        <div class="row justify-content-center my-5">
            <div class="col-md-12">


                <table class="table table-stripedtable table-bordered dark" id="table">
                    <thead class="thead-dark " align="center">
                        <tr>
                            <th scope="col">Template name</th>
                            <th scope="col">Active/Inactive</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody id="showjvf" align="center">

                        <tr>
                            <td>Basic Info</td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class=" slider round"></span>
                                </label>
                            </td>


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