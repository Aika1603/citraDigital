
<div class="col-sm-3">
  <h3>ToolBox</h3>
  <div class="list-group bg-white">
      <div class="dropdown">
        <a href="#" class="list-group-item list-group-item-action  dropdown-toggle" data-toggle="dropdown">
          Filter
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="grayscale.php">Grayscale</a>
          <a class="dropdown-item"  data-toggle="modal" data-target="#blur">Blur</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#Brightness">Brightness</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#Contrast">Contrast</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#Gamma">Gamma</a>
          <a class="dropdown-item" href="invert.php">Invert</a>
        </div>
      </div>
    <a  data-toggle="modal" data-target="#RGB" class="list-group-item list-group-item-action">RGB Custom (Colorize)</a>
    <a  data-toggle="modal" data-target="#crop" class="list-group-item list-group-item-action">Smart Crop</a>
    <a  data-toggle="modal" data-target="#Resizing" class="list-group-item list-group-item-action">Resizing</a>
    <a data-toggle="modal" data-target="#Rotate"  class="list-group-item list-group-item-action">Rotate</a>
  </div>
</div>


<!-- The Modal -->
<div class="modal" id="blur">
  <form name="datablur" action="blur.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Filter Blur</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        Masukan Skala Blur (1-100):
        <input type="number" class="form-control" name="blur">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>

<!-- The Modal -->
<div class="modal" id="Brightness">
  <form name="datablur" action="brightness.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Filter Brightness</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Jumlah kecerahan untuk diterapkan. > = -100 dan <= -1 untuk menggelapkan. 0 tanpa perubahan. > = 1 dan <= 100 untuk mencerahkan. <br/>
        Masukan Skala Brightness:
        <input type="number" class="form-control" name="brightness">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>


<!-- The Modal -->
<div class="modal" id="Contrast">
  <form name="datablur" action="contrast.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Filter Contrast</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Jumlah kontras untuk diterapkan. > = -100 dan <= -1 untuk mengurangi. 0 tanpa perubahan. > = 1 dan <= 100 meningkat. <br/>
        Masukan Skala Contrast:
        <input type="number" class="form-control" name="contrast">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>


<!-- The Modal -->
<div class="modal" id="Gamma">
  <form name="datablur" action="gamma.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Filter Gamma</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Jumlah koreksi gamma untuk diterapkan. > = 1.0 <br/>
        Masukan Skala Gamma:
        <input type="number" class="form-control" name="gamma">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>


<!-- The Modal -->
<div class="modal" id="RGB">
  <form name="datablur" action="rgb.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Filter RGB</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Jumlah warna red, green, dan blue. > = -100 dan <= -1 untuk mengurangi. 0 tanpa perubahan. > = 1 dan <= 100 untuk ditambahkan. <br/>
        Masukan Skala Red:
        <input type="number" class="form-control" name="red">
        Masukan Skala Blue:
        <input type="number" class="form-control" name="blue">
        Masukan Skala Green:
        <input type="number" class="form-control" name="green">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>



<!-- The Modal -->
<div class="modal" id="crop">
  <form name="datablur" action="crop.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Smart Crop</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Melakukan pemangkasan cerdas yang menentukan posisi pemangkasan dengan bagian penting dari gambar yang disimpan. <br/>
        Width:
        <input type="number" class="form-control" name="width">
        Height:
        <input type="number" class="form-control" name="height">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>



<!-- The Modal -->
<div class="modal" id="Resizing">
  <form name="datablur" action="resizing.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Resizing</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Width:
        <input type="number" class="form-control" name="width">
        Height:
        <input type="number" class="form-control" name="height">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>



<!-- The Modal -->
<div class="modal" id="Rotate">
  <form name="datablur" action="rotate.php" method="post">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Rotate</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Angle:
        <input type="number" class="form-control" name="angle">
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </form>
</div>
