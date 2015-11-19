<style>
  table {
    display: inline-block;
    vertical-align: top;
    margin: 10px;
  }
</style>
<?php

  require_once('Database.php');
  $host= 'localhost';
  $u= 'root';
  $p = ''
  $d= 'uofs_movies';
  $db= new Database($d, $u, $p, $host);

  $results= $db->query("SELECT * FROM movies");
	$movies = $db->resToArray($results);
?>
  <table id="movies" border=1 cellpadding=5px>
    <thead>
      <th>mID</th>
      <th>title</th>
      <th>year_released</th>
      <th>was_novel</th>
      <th>studioID</th>
    </thead>
    <tbody>
      <?php
      foreach( $movies as $m) {
          echo '<tr>';
          echo '<td>' . $m['mID'] . '</td>';
          echo '<td>' . $m['title'] . '</td>';
          echo '<td>' . $m['year_released'] . '</td>';
          echo '<td>' . $m['was_novel'] . '</td>';
          echo '<td>' . $m['studioID'] . '</td>';
          echo '</tr>';
      }
      ?>
      <tr>
          <td colspan="5">table name: movies</td>
      </tr>
    </tbody>
  </table>

<?php

$results= $db->query("SELECT * FROM actors");
$actors = $db->resToArray($results);

  ?>
    <table id="actors" border=1 cellpadding=5px>
      <thead>
        <th>aID</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>dob</th>
        <th>won_oscar</th>
      </thead>
      <tbody>
        <?php
        foreach( $actors as $m) {
            echo '<tr>';
            echo '<td>' . $m['aID'] . '</td>';
            echo '<td>' . $m['first_name'] . '</td>';
            echo '<td>' . $m['last_name'] . '</td>';
            echo '<td>' . $m['dob'] . '</td>';
            echo '<td>' . $m['won_oscar'] . '</td>';
            echo '</tr>';
        }
        ?>
        <tr>
            <td colspan="5">table name: actors</td>
        </tr>
      </tbody>
    </table>

    <?php

    $results= $db->query("SELECT * FROM studio");
    $studio = $db->resToArray($results);

      ?>
        <table id="actors" border=1 cellpadding=5px>
          <thead>
            <th>sID</th>
            <th>name</th>
          </thead>
          <tbody>
            <?php
            foreach( $studio as $m) {
                echo '<tr>';
                echo '<td>' . $m['sID'] . '</td>';
                echo '<td>' . $m['name'] . '</td>';
                echo '</tr>';
            }
            ?>
            <tr>
                <td colspan="2">table name: studio</td>
            </tr>
          </tbody>
        </table>

        <?php

        $results= $db->query("SELECT * FROM genres");
        $genres = $db->resToArray($results);

          ?>
            <table id="actors" border=1 cellpadding=5px>
              <thead>
                <th>gID</th>
                <th>name</th>
              </thead>
              <tbody>
                <?php
                foreach( $genres as $m) {
                    echo '<tr>';
                    echo '<td>' . $m['gID'] . '</td>';
                    echo '<td>' . $m['name'] . '</td>';
                    echo '</tr>';
                }
                ?>
                <tr>
                    <td colspan="2">table name: genre</td>
                </tr>
              </tbody>
            </table>


    <?php

    $results= $db->query("SELECT * FROM movie_actors");
    $ma = $db->resToArray($results);

      ?>
        <table id="actors" border=1 cellpadding=5px>
          <thead>
            <th>aaID</th>
            <th>movieID</th>
            <th>actorID</th>
          </thead>
          <tbody>
            <?php
            foreach( $ma as $m) {
                echo '<tr>';
                echo '<td>' . $m['maID'] . '</td>';
                echo '<td>' . $m['movieID'] . '</td>';
                echo '<td>' . $m['actorID'] . '</td>';
                echo '</tr>';
            }
            ?>
            <tr>
                <td colspan="3">table name: movie_actors</td>
            </tr>
          </tbody>
        </table>
