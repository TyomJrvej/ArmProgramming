<?php require ROOT . "/views/layouts/admin_header.php"; ?>
<div id="wrapper">

    <!-- navbar -->
    <?php include ROOT . "/views/layouts/admin_navbar.php"; ?>
    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Users <small>Control</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-user"></i> Users
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                        <?php foreach( $users as $usersList ) : ?>
                            <tr>
                                <td><?=$usersList["id"]; ?></td>
                                <td><?=$usersList["name"]; ?></td>
                                <td><?=$usersList["email"]; ?></td>

                                <td>
                                    <a href="/admin/users/delete/<?=$usersList['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody></table>
                        <div class="pagination_area pull-right">
                        <nav>
                            <?php echo $pagination->get(); ?>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- /.row -->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php require ROOT . "/views/layouts/admin_foooter.php"; ?>
