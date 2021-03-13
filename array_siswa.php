<?php
                    $proses = $_GET['proses'];
                    $nama = $_GET['nama'];
                    $matkul = $_GET['matkul'];
                    $nilai_uts = $_GET['nilai_uts'];
                    $nilai_uas = $_GET['nilai_uas'];
                    $nilai_tugas = $_GET['nilai_tugas'];
                    
                  
                  
                ?>



                <center>
                <table border ='1'>
                <tr class="table-primary">
                   
                    <tr><th ><?php echo '<br/> Nama : ' . $nama; ?></th></tr>
                  
                    <tr><th <?php echo '<br/> Mata Kuliah : ' . $matkul; ?></th></tr>
                    <tr><th ><?php  echo '<br/> Nilai UTS : ' . $nilai_uts; ?></th></tr>
                    <tr><th ><?php echo '<br/> Nilai UAS : ' . $nilai_uas; ?></th></tr>
                    <tr><th ><?php echo '<br/> Nilai Tugas Praktikum : ' . $nilai_tugas; ?></th></tr>
                   
                
                </table>
                </center>
