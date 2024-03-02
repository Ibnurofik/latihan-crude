<html>
    <form action="insert.php" method="post">
        <label for="">Nama</label> <br>
        <input type="text" name="nama">
        <br> <br>
        <label for="">Alamat</label> <br>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea>
        <br> <br>
        <label for="">Umur</label> <br>
        <input type="text" name="umur">
        <br> <br>
        <label for="">Jenis Kelamin</label><br>
        <select name="jenis_kelamin" id="">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br><br>
        <button type="submit">Tambah</button>
    </form>
</html>