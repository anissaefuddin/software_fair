<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>
        Application Form
    </title>
    <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="row" style="padding-left: 300px;padding-right: 300px;">
    <br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Application Form</h3>
        </div>
        <div class="panel-body">
            <form enctype="multipart/form-data" accept-charset="utf-8"  method="post"  id="form" role="form" >
            <div class="row">
                <div class="col-lg-2">
                    Kode Peserta 
                </div>
                <div class="col-lg-6">
                    <input type="text" placeholder="Kode Aplikasi" name="kode_peserta" id="kode_peserta" required class="form-control" onchange="check_kode(this.value)">
                    <span id="check_apps"></span>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-2">
                    Nama Aplikasi 
                </div>
                <div class="col-lg-6 controls">
                    <input type="text" placeholder="Nama Aplikasi" name="nama_apps" id="nama_apps" required class="form-control">
                </div>
                <label class="control-label"></label>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-2">
                    Pembuat 
                </div   >
                <div class="col-lg-6">
                    <input type="text" placeholder="Pembuat aplikasi" name="pembuat" id="pembuat" required class="form-control">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-2">
                    Email
                </div   >
                <div class="col-lg-6">
                    <input type="text" placeholder="Masukkan Email" name="email" id="email" required class="form-control">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-2">
                    Telp
                </div   >
                <div class="col-lg-6">
                    <input type="text" placeholder="Masukka no telp" name="telp" id="telp" required class="form-control">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-2">
                    Kategori Aplikasi    
                </div>
                <div class="col-lg-6">
                    <select name="kategori" id="kategori" class="form-control" required>
                        <option value="Web Apps">Web Apps</option>
                        <option value="Mobile Apps">Mobile Apps</option>
                        <option value="Desktop Apps">Desktop Apps</option>
                        <option value="Game">Game</option>
                    </select>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-2">
                    Gambar 
                </div>
                <div class="col-lg-6 form-group">
                    <input type="file" name="gambar" id="gambar" required>
                </div>
            </div>
            <br>
             <div class="row">
                <div class="col-lg-2">
                    Keterangan 
                </div>
                <div class="col-lg-6 form-group">
                    <textarea name="keterangan" id="keterangan" required="required" class="form-control" rows="8" placeholder="Keterangan Aplikasi"></textarea>
                </div>
            </div>
            <br>

           
            <div class="row">
                <div class="col-lg-8">

                </div>
                <div class="col-lg-2">
                    <button class="btn btn-danger" type="reset">Clear Fields</button>

                </div>
                <div class="col-lg-2">
                    <button type="submit" id="save" class="btn btn-success">Add Apps</button>
                </div>
            </div>
            </form>
            <br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Pembuat</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php if($dataPeserta==""):?>
                    <tr>
                        <td colspan="6" style="color:red;" align="center">Data kosong</td>
                    </tr>
                <?php endif;?>
        <?php if($dataPeserta):?>
            <?php foreach ($dataPeserta as $val):?>
                <tr>
                    <td><?=$no++?></td>
                    <td>12</td>
                    <td><?=$val->nama_apps;?></td>
                    <td><?=$val->pembuat;?></td>
                    <td><?=$val->kategori;?></td>
                    <td>Edit | Hapus</td>
                </tr>
            <?php endforeach;?>
        <?php endif;?>
                </tbody>
            </table>
        </div>

    </div>
</div>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.js"></script>
<script language="javascript">

function check_kode(val) {
    if($('#kode_peserta').val() != ""){
      $.ajax({
        'url'       : '<?php echo base_url("apps/checkData");?>',
        'dataType'  : 'json',
        'type'      : 'POST',
        'data'      : { "id_alat" : val },
        'success'   : function(data) {
          if(data != ""){
            $('#check_apps').text('ID User sudah ada!');
            $('#check_apps').css('color','red');
            $('#save').attr('disabled','disabled');
          } else if(data == "") {
            $('#check_apps').text('ID User tersedia!');
            $('#check_apps').css('color','blue');
            $('#save').removeAttr('disabled');
          }
        }
      });
    } else {
      $('#check_apps').text('');
    }
 }


 function hapusData(id)
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('alat/hapusData/"+id+"')?>",
      dataType: 'json'
    })
    .success(function(data){
      //$.growl.notice({ title: 'Sukses', message: data.msg});      
      window.location.replace("<?php echo base_url('alat')?>");
    })
  }
  function getAlat(id)
  {    
    var url = "<?=site_url('alat/changealat/"+id+"')?>";
    $.get(url, function(data){
      $(".div-merk").load(url);
    });
  }
  //  $(document).ready( function () {
  //   var tabel = $('#alat').DataTable({
  //     scrollY:        "500px",
  //     scrollX:        "100%",
  //     "fnInitComplete": function() {
  //       this.fnAdjustColumnSizing(true);
  //     }      
  //   });    
  // });


</script>
    <script>   //no need to specify the language
  $(function(){
  $("#save").click(function(e){  // passing down the event 
        $.ajax({
           url:'<?=base_url();?>apps/insert',
           type: 'POST',
           data: $("#form").serialize(),   
           success: function(){
               alert("Apps berhasil ditambahkan!");
               $('#kode_peserta').val('');
               $('#nama_apps').val('');
               $('#pembuat').val('');
               $('#gambar').val('');
                $('#email').val('');
                $('#kategori').val('');
                $('#telp').val('');
               $('#keterangan').val('');
               // uploadImage();
           },
           error: function(){
               alert("Gagal insert data!")
           }
       });
       e.preventDefault(); // could also use: return false;
     });
    });


  function uploadImage() {

    if (typeof FormData !== 'undefined') {

        // send the formData
        var formData = new FormData( $("#formID")[0] );

        $.ajax({
            url : '<?=base_url();?>apps/uploadimg',  // Controller URL
            type : 'POST',
            data : formData,
            async : false,
            cache : false,
            contentType : false,
            processData : false,
            success : function(data) {
                successFunction(data);
            }
        });

    } else {
       message("Your Browser Don't support FormData API! Use IE 10 or Above!");
    }   
}
    </script>

</body>
</html>