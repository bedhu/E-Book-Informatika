<?php
    error_reporting(0);
    session_start();
  include  "config/koneksi.php";
   $nama = $_SESSION['username'];
   $user_level = $_SESSION['level'];
  if(!isset($_SESSION['username'])){
  
    header('idrisit.000webhostapp.com:login.php');
  }

 //simpan
    if (isset($_POST['submit'])) {


      $password=md5($_POST[password]);
      mysql_query("INSERT INTO `kategori`(`Kategori`, `NA`,`TanggalBuat`) VALUES ('$_POST[kategori]','N',NOW())");

      header('idrisit.000webhostapp.com:media.php?module=<?php echo $_GET[module]?>');
    }elseif ($_GET[delete]=="y") {
      mysql_query("DELETE FROM `kategori` WHERE id='$_GET[id]'");

      header('idrisit.000webhostapp.com:media.php?module=<?php echo $_GET[module]?>');
    }elseif (isset($_POST[simpanedit])) {
     mysql_query("UPDATE `kategori` SET `Kategori`='$_POST[kategori]' WHERE id='$_GET[id]'");

      header('idrisit.000webhostapp.com:media.php?module=<?php echo $_GET[module]?>');
    }




    switch($_GET[act]){
       default:
       ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box card shadow">
                                        
                                        <div class="card-body">

                                          <h2 class="mb-0">Master Kategori</h2>
                                           <hr/>

                                           <button type="button" class="btn btn-sm btn-primary mt-1 mb-1" data-toggle="modal" data-target="#largeModal">Tambah Kategori</button><br/><br/>


                                           <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                          <thead>
                            <tr>
                              <th class="wd-15p">No</th>
                              <th class="wd-15p">Kategori</th>
                              <th class="wd-15p">Tanggal Buat</th>
                              
                         <th class="wd-10p">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>

                            <?php
                            $query=mysql_query("SELECT * from kategori");
                            $no;
                            while ($q=mysql_fetch_array($query)) {
                              $no++;
                             

                             echo "
                              <tr>
                              <td>$no</td>
                                <td>$q[Kategori]  </td>
                                <td>$q[TanggalBuat]</td>
                               

                                <td>
                                <a href=\"media.php?module=kategori&act=edit&id=$q[id]\" ><span class=\"badge badge-warning\">Edit</span></a>
                                <a href=\"media.php?module=kategori&delete=y&id=$q[id]\" ><span class=\"badge badge-danger\">Hapus</span></a>
                                 </td>
                              </tr>";



                              
                            }


                            ?>
                          <!--   <tr>
                              <td>Bella</td>
                              <td>Chloe</td>
                              <td>System Developer</td>
                              <td>2018/03/12</td>
                              <td>$654,765</td>
                              <td>b.Chloe@datatables.net</td>
                            </tr> -->
                          
                          </tbody>
                        </table>
                </div>


                  <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h2 class="modal-title" id="largeModalLabel">Tambah Kategori</h2>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <form method="post" action="">


                          <div class="form-group">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control"  placeholder="Nama" name="kategori">
                          </div>
                           
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                     
                    </div>
                  </div>
                </div>
              </div>
               </form>
                                       
       <?php
       break;

  case 'edit':
         $edit=mysql_fetch_assoc(mysql_query("select * from kategori where id='$_GET[id]'"));

     

        ?>

        

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card-box card shadow">
                                        
                                        <div class="card-body">

                                          <h2 class="mb-0">Edit</h2>
                                           <hr/>
                      <form method="post" action="">
                          <div class="form-group">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control"  placeholder="Kategori" name="kategori" value="<?php echo $edit[Kategori]; ?>">
                          </div>
                          
                   


                    <button type="submit" name="simpanedit" class="mt-2 btn btn-block btn-success mt-1 mb-1">Simpan</button>
               </form>

        <?php
         break;
}

?>
