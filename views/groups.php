<?php 

groups_add();

function groups_add(){
  include('connect.php');
  $sql = 'INSERT INTO (caption) VALUES ('.$_POST['caption'].')';
  if (!mysqli_query($link, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
  mysqli_close($link);
  ?>
  <form>
    <div class="form-group">
      <label>Название группы</label>
      <input type="text" name="caption" id="caption" class="form-control" placeholder="Введите название группы">
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
  </form>
  <?
}

function groups_list(){
	?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
  <?
}

?>