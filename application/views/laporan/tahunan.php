<style>
    table {
        border-collapse: collapse;
        display: flex;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
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
<h3>Laporan Keuangan Tahun Ini</h3>
<table border="1">
    <thead>
        <tr class="judul">
            <th width="20"  style="text-align: center">#</th>
            <th width="150">Waktu</th>
            <th width="200">Pemasukan</th>
            <th width="200">Pengeluaran</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $no = 1;
                foreach ($history as $item) {
                    ?>
                    <tr>
                        <td width="20" style="text-align: center"><?=$no++?></td>
                        <td width="150"><?=$item->created_at?></td>
                        <td width="200"><?=rupiah($item->pemasukan)?></td>
                        <td width="200"><?=rupiah($item->pengeluaran)?></td>
                    </tr>
                    <?php
                }
            ?>
        </tbody>
</table>