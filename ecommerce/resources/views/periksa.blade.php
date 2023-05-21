<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Periksa</title>
    <style>
        table {
            border-collapse: collapse; rules:"all";
        }
        table, th, td {
            border: 1px solid black; rules:"all";
        }
        th, td {
            padding: 10px; border;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="pemeriksaan" class="col-4 col-form-label">Tanggal pemeriksaan</label> 
    <div class="col-8">
      <input id="pemeriksaan" name="pemeriksaan" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Tanggal lahir/usia</label> 
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label" for="jenis">Jenis kelamin</label> 
    <div class="col-8">
      <select id="jenis" name="jenis" class="custom-select">
        <option value="perempuan">Perempuan</option>
        <option value="laki-laki">Laki-laki</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<table border="5px" rules:"all" cellpadding="8">
        <tr>
            <td>Jenis Tes</td>
            <td>Hasil Pemeriksaan</td>
            <td>Normal</td>
        </tr>
        <tr>
            <td>Tekanan Darah</td>
            <td></td>
            <td>120/80 mmhg</td>
        </tr>
        <tr>
            <td>Asam Urat</td>
            <td></td>
            <td>Pria: < 7 mg/dl <br> Wanita: < 6 mg/dl</td>
        </tr>
        <tr>
            <td>Kolesterol Total</td>
            <td></td>
            <td>< 200 mg/dl</td>

        </tr>
        <tr>
            <td rowspan="3">Gula Darah</td>
            <td></td>
            <td>Puasa: 70-110 mg/dl</td>
            
        </tr>
        <tr>
          <td></td>
        <td>2 jam setelah makan:  
              100-150 mg/dl</td>
        </tr>
        <tr>
          <td></td>
            <td>Sewaktu/acak : 70-125 mg/dl</td>
        </tr>
        
    </table>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>