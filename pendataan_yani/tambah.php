<html>
    <head>
    </head>
    <body>
        <h1>Form Tambah Pasien</h1>
        <form action="proses-tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_lengkap">Nama Pasien :</label>
                    <input type="text" name="nama_lengkap" />
                </p>
                <p>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" row="5"></textarea>
                </p>
                <p>
                    <label for="jk">Jenis Kelamin :</label>
                    <label><input type="radio" name="jk" Value="laki-laki" />Laki-laki</label>
                    <label><input type="radio" name="jk" Value="perempuan" />Perempuan</label>
                <p>
                    <label for="no_telp">NO. Telp :</label>
                    <input type="telp" name="no_telp" />
                </p>
                <p>
                    <label for="agama">Agama : </label>
                    <select name="agama">
                        <option value="islam">Islam</option>   
                        <option value="kristen">Kristen</option>   
                        <option value="katolik">Katolik</option>   
                        <option value="Hindhu">Hindhu</option>  
                        <option value="Budha">Budha</option>  
                        <option value="konghucu">Konghucu</option>  
                    </select>
                </p>
                <p>
                    <label for="tanggal_masuk">Tanggal Masuk:</label>
                    <input type="date" name="tanggal_masuk" />
                </p>
                <p>
                    <label for="gejala">Gejala:</label>
                    <input type="text" name="gejala" />
                </P>
                <p>
                    <label for="tempat_lahir">Tempat Lahir:</label>
                    <input type="text" name="tempat_lahir" />
                </p>
                <p>
                    <label for="tanggal_lahir">Tanggal Lahir :</label>
                    <input type="date" name="tanggal_lahir" />
                </p>
                <p>
                <label for="no_kamar">NO.Kamar:</label>
                    <input type="number" name="no_kamar" />
                </p>
                <p>
                    <input type="submit" value="Tambah Pasien" name="tambah_pasien" />
                </P>
</fieldset>
</form>
</body>
</html>