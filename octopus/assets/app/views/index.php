<!doctype html>
<html class="fixed">
    <?php include("../../includes/head.php"); ?>
    <body>
        <section class="body">
            <!-- start: header -->
            <?php include("../../includes/header.php"); ?>
            <!-- end: header -->
            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <?php include("../../includes/sidebar.php"); ?>
                <!-- end: sidebar -->
                <section role="main" class="content-body">
                    <?php include("../../includes/dashboard.php"); ?>
                    <?php include("../../includes/panel_chart1.php"); ?>
                    <div class="row">
                        <!-- start: page -->
                        <?php include("../../includes/panel_chart2.php"); ?>
                        <?php include("../../includes/panel_widgets.php"); ?>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6">
                            <?php include("../../includes/panel_profile.php"); ?>
                        </div>
                        <div class="col-xl-3 col-lg-6">
                            <?php include("../../includes/panel_transparent.php"); ?>
                            <?php include("../../includes/panel_actions.php"); ?>
                        </div>
                        <?php include("../../includes/panel_heading.php"); ?>
                    </div>
                    <div class="row">
                        <?php include("../../includes/global_stats.php"); ?>
                        <?php include("../../includes/project_stats.php"); ?>
                    </div>
                    <!-- end: page -->
                </section>
            </div>
            <?php include("../../includes/sidebar_right.php"); ?>
        </section>
        <?php include("../../includes/scripts.php"); ?>

    </body>
</html>