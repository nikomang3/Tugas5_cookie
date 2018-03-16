<?php  
    if (!isset($_COOKIE['count'])){
        echo "Sebuah Website Belum Pernah Dikunjungi";
    }
    else{
        $jumlah = $_COOKIE['count'];
        echo "Sebuah Website Sudah Pernah Dikunjungi Sebanyak $jumlah kali <br>";
        $tanggal = $_COOKIE['date'];
        $waktu = $_COOKIE['time'];
        echo "<table>";
        echo "  <tr>
                    <th>Tangal</th>
                    <th></th>
                    <th>Pukul</th> 
                </tr>
                <tr>";
        echo "<td>$tanggal</td> <td></td>";
        echo "<td>$waktu</td>";
        echo "</tr> </table>";
    }
    
    
    
    
