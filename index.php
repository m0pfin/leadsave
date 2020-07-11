<?php
/**
 * Created by PhpStorm.
 * User: m0pfin
 * Date: 26.06.2020
 * Time: 01:47
 */

    include 'include/head.php';
?>
<!-- Header -->
<div class="header">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0">Dashboards</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Страница с лидами</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="https://qiwi.me/4dd54af1-1f38-4611-8e71-2fb771c986dc" class="btn btn-sm btn-neutral">Задонатить автору</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Всего лидов</h5>
                        <span class="h2 font-weight-bold mb-0"><?php echo $db->countAll('lead','id') ?></span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                            <i class="ni ni-active-40"></i>
                        </div>
                    </div>
                </div>
<!--                <p class="mt-3 mb-0 text-sm">-->
<!--                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>-->
<!--                    <span class="text-nowrap">Since last month</span>-->
<!--                </p>-->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Сегодня</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php
                                $leadtoday = $db->query('SELECT * FROM lead WHERE dates >= CURDATE()');
                                $leads_today = count($leadtoday);
                                echo $leads_today;
                            ?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                            <i class="ni ni-chart-pie-35"></i>
                        </div>
                    </div>
                </div>
<!--                <p class="mt-3 mb-0 text-sm">-->
<!--                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>-->
<!--                    <span class="text-nowrap">Since last month</span>-->
<!--                </p>-->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">За вчера</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php
                                $leadlast = $db->query('SELECT * FROM lead WHERE dates  >= (CURDATE()-1) AND dates < CURDATE()');
                                $leads_last = count($leadlast);
                                echo $leads_last;
                            ?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                            <i class="ni ni-chart-bar-32"></i>
                        </div>
                    </div>
                </div>
<!--                <p class="mt-3 mb-0 text-sm">-->
<!--                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>-->
<!--                    <span class="text-nowrap">Since last month</span>-->
<!--                </p>-->
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">За 7 дней</h5>
                        <span class="h2 font-weight-bold mb-0">
                            <?php
                                $leadtoday = $db->query('SELECT * FROM lead WHERE dates  >= DATE_SUB(CURRENT_DATE, INTERVAL 7 DAY)');
                                $leads_today = count($leadtoday);
                                echo $leads_today;
                            ?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                            <i class="ni ni-money-coins"></i>
                        </div>
                    </div>
                </div>
<!--                <p class="mt-3 mb-0 text-sm">-->
<!--                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>-->
<!--                    <span class="text-nowrap">Since last month</span>-->
<!--                </p>-->
            </div>
        </div>
    </div>
</div>
</div>

<div class="container-fluid">
        <div class="card">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Лиды</h3>
                    </div>

                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="myTable">
                        <thead class="thead-light">
                        <tr>

                            <th>id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Partners</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Subid</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $lead = $db->query("SELECT * FROM `lead` ORDER BY id ASC");

                        foreach ($lead as $leads) {
                        ?>
                        <tr id="<?php echo $leads['id']; ?>">
                            <th>
                                <?php echo $leads['id']; ?>
                            </th>
                            <td>
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img alt="Image placeholder" src="assets/img/theme/lead.png">
                                    </a>
                                    <span class="name mb-0 text-sm"><?php echo $leads['name']; ?></span>
                                </div>
                            </td>
                            <td>
                                <?php echo $leads['phone']; ?>
                            </td>
                            <td>
                                <span class="badge badge-info">
                                    <?php echo $leads['partners']; ?>
                                </span>
                            </td>
                            <td>
                               <span class="badge badge-dot mr-4">
                                    <i class="bg-success"></i>
                                        <span class="status"><?php echo status($leads['status']); ?></span>
                                </span>
                            </td>
                            <td>
                                <?php echo $leads['dates']; ?>
                            </td>
                            <td>
                                <?php echo $leads['subid']; ?>
                            </td>

                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="include/crud.php?delete=<?php echo $leads['id']; ?>">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>


</div>
<?php
    include 'include/foot.php';
?>

