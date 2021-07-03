<!-- Content Wrapper. Contains page content -->
<main class="adminpopular-wrapper">
    <div class="container-fluid">
        <!-- breadcum -->
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Dashboard</h4>
            <ul class="db-breadcrumb-list">
                <li>
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                </li>
                <li>Dashboard</li>
            </ul>
        </div>
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="title">
                                    <h3 class="title-text">All Register User</h3>
                                    <div class="widget-content">
                                        <div class="table-responsive">
                                            <table class="table f-border-none table-hover">
                                                <thead>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>User Name</th>
                                                    <th>User Phone</th>
                                                    <th>User Email</th>
                                                    <th>Organization Name</th>
                                                    <th>Number Of Employees</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>dsaa</td>
                                                    <td>sass</td>
                                                    <td>sdas</td>
                                                    <td>saswe</td>
                                                    <td>dwee</td>
                                                    <td>dsaewe</td>

                                                    <td>



                                                        <a href="#"
                                                           onclick="role_inactive()"
                                                           class="btn btn-warning" title="Inactive">
                                                            <i class="fa fa-arrow-down"></i>
                                                        </a>

                                                        <a href="#"
                                                           onclick="role_active()"
                                                           class="btn btn-danger" title="Active">
                                                            <i class="fa fa-arrow-up"></i>
                                                        </a>


                                                        <a href="#"
                                                           onclick="delete_user()"
                                                           class="btn btn-danger" title="Delete Role">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
    function main_page_pagination($this) {
        var url = $this.attr("href");
        if (url != '') {
            $.ajax({
                type: "POST",
                url: url,
                success: function (msg) {
                    $("#ajaxdata").html(msg);
                }
            });
        }
        return false;
    }
</script>
