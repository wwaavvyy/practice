<?php $this->load->view('admin/partials/admin_header.php'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Производители</h3>
                <?php echo $this->session->flashdata('message') ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Все производители</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ИД</th>
                                    <th>Название</th>
                                    <th>Логитип</th>
                                    <th>Действие</th>
                                </tr>
                            </thead>
                            <tbody>
                                {manufacturers}
                                    <tr>
                                        <td>{id}</td>
                                        <td>{manufacturer_name}</td>
                                        <td>{manufacturer_logo}</td>
                                        <th>
                                            <a href="<?= base_url('admin/manufacturers/deleteManufacturer/{id}')?>" class="btn btn-danger btn-xs" onclick=" return confirm('Вы уверены, что хотите удалить?')">Удалить</a>
                                        </th>
                                    </tr>
                                {/manufacturers}
                            </tbody>
                        </table>
                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col -->

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Добавить нового производителя</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        
                        <?php echo form_open_multipart('admin/manufacturers/addManufacturer'); ?>
                            <fieldset>
                                <div class="form-group">
                                   <label for="manufacturer_name">Производитель:</label>
                                   <input class="form-control" name="manufacturer_name" id="manufacturer_name" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label for="manufacturer_logo">Логотип</label>
                                    <input type="file" class="form-control" name="manufacturer_logo" id="manufacturer_logo">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Добавить производителя">
                                </div>
                            </fieldset>         
                        </form>

                    </div> <!-- /content --> 
                </div><!-- /x-panel --> 
            </div> <!-- /col --> 
        </div> <!-- /row --> 
    </div>
</div> <!-- /.col-right --> 
<!-- /page content -->



<?php $this->load->view('admin/partials/admin_footer.php'); ?>

<?php if($this->session->flashdata('message') != NULL) : ?>
<script>
    swal({
      title: "Успешно!",
      text: "<?php echo $this->session->flashdata('message'); ?>",
      type: "success",
      timer: 1500,
      showConfirmButton: false
    });
</script>
<?php endif ?>