<?php $this->load->view('admin/partials/admin_header.php'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Производители</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <hr>
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Добавить новый транспорт</a>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="collapse" id="collapseExample">
            <?php echo validation_errors(); ?> 
			<?php echo form_open_multipart('admin/vehicles/add'); ?>
                <fieldset>
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Производитель</label>                            
                                <select class="form-control" name="manufacturer_id" id="parent_cat">
                                    {manufacturers}
                                        <option value="{id}">{manufacturer_name}</option>
                                    {/manufacturers}
                                </select>
                        </div>
                        <div class="col-xs-6">
                            <label>Модель</label>
                            <select class="form-control" name="model_id" >
                                {models}
                                    <option value="{id}">{model_name}</option>
                                {/models}
                            </select>
                        </div>
                    </div>
                            
                    <br>
                        
                    <div class="row">
                        <div class="col-xs-6">
                        <label>Категория</label>
                            <select class="form-control" name="category" >
                                <option value="Subcompact">Субкомпактный</option>
                                <option value="Compact">Компактный</option>
                                <option value="Mid-size">Среднеразмерный</option>
                                <option value="Full-size">Полноразмерный</option>
                                <option value="Mini-Van">Минивэн</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                            <br>
                            <input type="number" step="any" class="form-control" name="b_price" placeholder="Стоимость аренды" required>
                        </div>
                    </div>
                            
                    <br>
                    <div class="row">
                        <div class="col-xs-6">
                            <br>
                            <label for="gear">Тип трансмиссии:</label>
                            <select name="gear" id="gear" class="form-control">
                                <option value="автомат">Автомат</option>
                                <option value="ручная">Ручной</option>
                            </select>
                        </div>
                        <div class="col-xs-6">
                        <br>
                            <label for="mileage">Пробег:</label>
                            <input type="text" step="any" class="form-control" name="mileage" placeholder="Пробег (км)" required>
                        </div>
                    </div>
                            
                    <br>
                    <div class="row">
                        <div class="col-xs-6">
                            <br>
                            <input class="form-control" name="e_no" placeholder="Номер двигателя" required>
                        </div>
                        <div class="col-xs-6">
                            <br>
                            <input class="form-control" name="c_no" placeholder="Номер кузова" required>
                        </div>
                    </div>
                            
                    <br>
                        
                    <div class="row">
                        <div class="col-xs-6">
                            <label>Add Date</label>
                            <input type="Date"class="form-control" name="add_date"  value="<?php echo date("Y-m-d"); ?>" >
                        </div>
                        <div class="col-xs-6">
                            <br>
                            <input type="number" class="form-control" name="doors" placeholder="Число дверей" required>
                        </div>
                    </div>
                            
                    <br>

                    <div class="row">
                        <div class="col-xs-6">
                            <br>
                            <input type="number"class="form-control" name="registration_year" placeholder="Год регистрации (XXXX)" required>
                        </div>
                        <div class="col-xs-6">
                            <br>
                            <input type="number" class="form-control" name="insurance_id" placeholder="ИД страховки" required>
                        </div>
                    </div>
                            
                    <br>

                    <div class="row">
                        <div class="col-xs-6">
                            <input type="number"class="form-control" name="seats" placeholder="Число сидений" required>
                        </div>
                        <div class="col-xs-6">
                            <input type="number" step="any" class="form-control" name="tank" placeholder="Объем бака (литры)" required>
                        </div>
                    </div>
                    <br>
                            
                    <div class="row">
                        <div class="col-xs-6">
                         <input type="text"class="form-control" name="v_color" placeholder="Цвет" required>
                        </div>
                        <div class="col-xs-6">
                            <input type="file" class="form-control" name="image" >
                        </div>
                    </div>
<br>
                    <div class="row">
                        <div class="col-xs-6">
                        <label for="gear">Порекомендуете?</label>
                            <select name="featured" id="featured" class="form-control">
                                <option value="0">Нет</option>
                                <option value="1">Да</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" name="buttonSubmit" value="Добавить новый транспорт" />
                                                            
                </fieldset>         
            </form>
            <br>
            </div>
        </div> <!-- /row --> 

        <!-- all models --> 
        <div class="row">
            <div class="col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Все модели</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                 <tr>
                                    <th>ИД</th>
                                    <th>Модель</th>
                                    <th>Год выпуска</th>
                                    <th>Категория</th>
                                    <th>Добавлен</th>
                                    <th>Статус</th>
                                    <th>Стоимость</th>
                                    <th>Картинка</th>
                                    <th>Действие</th>
                                    <th>Продан</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ИД</th>
                                    <th>Модель</th>
                                    <th>Год выпуска</th>
                                    <th>Категория</th>
                                    <th>Добавлен</th>
                                    <th>Статус</th>
                                    <th>Стоимость</th>
                                    <th>Картинка</th>
                                    <th>Действие</th>
                                    <th>Продан</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($vehicles as $vehicle) : ?>
                                    
                                    <tr class="<?php if($vehicle['status'] != "доступно") echo 'внимание'; else echo 'успешно'?>">
                                    
                                        <td><?php echo $vehicle['vehicle_id']; ?></td>
                                        <td><?php echo $vehicle['model_name']; ?></td>
                                        <td><?php echo $vehicle['manufacturer_name']; ?></td>
                                        <td><?php echo $vehicle['category']; ?></td>
                                        <td><?php $date = new DateTime($vehicle['add_date']); echo $date->format('m/d/Y'); ?></td>
                                        
                                        <td><?php echo $vehicle['status']; ?></td>
                                        <td><?php echo $vehicle['buying_price']; ?></td>
                                        <td width="100">
                                            <img class="img-responsive" src="<?php echo base_url()."uploads/".$vehicle['image']; ?>"></td>
                                        <td>
                                            <?php if($vehicle['status']=="available") : ?>
                                                <?php echo form_open('admin/vehicles/sell/'); ?>
                                                    <input type="hidden" name="vehicle_id" value="<?php echo $vehicle['vehicle_id']; ?>">
                                                    <button class="btn btn-xs btn-success" type="submit" name="btn-sell">Продать</button>
                                                </form> 
                                            <?php endif ?>
                                                    
                                            <?php if ($this->session->userdata('type') =="admin") : ?>
                                                
                                                <?php echo form_open('admin/Vehicles/DeleteVehicle/'); ?>
                                                    <input type="hidden" name="vehicle_id" value="<?php echo $vehicle['vehicle_id']; ?>">
                                                    <button onclick="return confirm('Записи об этом транспорте будут удалены. Вы уверены?')" class="btn btn-xs btn-danger" type="submit" name="btn-delete">Удалить</button>
                                                </form>             
                                            <?php endif; ?>
                                        </td>
                                        <td><?php if($vehicle['sold_date']=== NULL){ echo 'Не продано'; }else{ $date = new DateTime($vehicle['sold_date']); echo $date->format('m/d/Y'); }?></td>
                                                    
                                    </tr>
                                <?php endforeach; ?>     
                            </tbody>
                        </table>
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

    <script src="<?php echo base_url("assets/vendors/datatables.net/js/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-buttons/js/buttons.print.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/datatables.net-scroller/js/datatables.scroller.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/jszip/dist/jszip.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/pdfmake/build/pdfmake.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/vendors/pdfmake/build/vfs_fonts.js"); ?>"></script>
    
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-responsive").length) {
            $("#datatable-responsive").DataTable({
            aaSorting: [[0, 'desc']],
            
              dom: "Blfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "csv",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "excel",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "pdf",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
                {
                  extend: "print",
                  className: "btn-sm",
				  exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                }
                },
              ],
              responsive: true,
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
          
            init: function() {
              handleDataTableButtons();
            }
          };
        }();    
                    
        TableManageButtons.init();
      });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
    
    $("#parent_cat").change(function() {
        $(this).after();
        $.get('<?php echo base_url(); ?>controller_vehicle/getsub/' + $(this).val(), function(data) {
            $("#sub_cat").html(data);
            $('#loader').slideUp(200, function() {
                $(this).remove();
            });
        }); 
    });

});
</script>

<?php if($this->session->flashdata('message') != NULL) : ?>
<script>
    swal({
      title: "Успешно",
      text: "<?php echo $this->session->flashdata('message'); ?>",
      type: "success",
      timer: 1500,
      showConfirmButton: false
    });
</script>
<?php endif ?>