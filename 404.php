  <?php include_once('mainhead.php'); ?>
     <section class="content-header">
      <h1>
        <?php echo $_GET['errorcode']; ?> Error Page
      </h1>
     </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-yellow"> <?php echo $_GET['errorcode']; ?></h2>

        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> <?php echo $_GET['errorname']; ?></h3>

          <p>
            We could not find the page you were looking for.
            Meanwhile, you may <a href="Dashboard.php">return to dashboard</a> or try using the search form.
          </p>

          <form class="search-form hidden">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
  <?php include_once('mainfooter.php'); ?>
   <!-- /.content-wrapper -->
  </body>
</html>
  






















