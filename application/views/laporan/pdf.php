<style>
    table {
        border-collapse: collapse;
    }
    table .judul {
        background-color: #acacac;
        padding: 5px 20px;
    }
    table td {
        padding: 5px 20px;
    }
    h3 {
        text-align: center;
    }
</style>
<h3>Laporan Keuangan Bulan Ini</h3>
<table border="1">
    <thead>
        <tr class="judul">
            <th width="20"  style="text-align: center">#</th>
            <th width="150">Keterangan</th>
            <th width="200">Deskirpsi</th>
            <th width="100">Nominal</th>
            <th width="100">No Hp/Token</th>
            <th width="100">Status</th>
            <th width="100">Tanggal</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($laporan as $item) {
                    ?>
                    <tr>
                        <td width="20" style="text-align: center"><?=$no++?></td>
                        <td width="150"><?=$item->keterangan?></td>
                        <td width="200"><?=$item->deskripsi?></td>
                        <td width="100"><?=rupiah($item->nominal)?></td>
                        <td width="100"><?php if( $item->no_hp != null){echo  $item->no_hp ;}else { echo "-";}?></td>
                        <td width="100"><?=$item->status?></td>
                        <td width="100"><?=tglInd($item->created_at)?></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
</table>