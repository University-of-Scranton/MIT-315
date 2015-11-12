<html>
  <head>
      <title>UofS Book Store!</title>
  </head>
  <body>
    <?php
      require_once( 'Database.php' );
      $db = new Database( 'uofs_books', 'root', '', 'localhost' ); //connect to DB
      $resource = $db->query(
        'SELECT books.id AS bID, books.title, books.year, books.edition, authors.id AS aID, authors.first_name, authors.last_name
        FROM books, authors, book_athors
        WHERE books.id = book_athors.bookID
        AND authors.id = book_athors.authorID;'
      ); //Query DB
      $results = $db->resToArray( $resource ); //convert results to array
    ?>

    <h2>All the Books!</h2>

    <?php
      foreach ( $results as $r ) {
        echo '<p>Title: ' . $r['title'] .'</p>';
        echo '<p>Author: ' . $r['first_name'] . ' '. $r['last_name'] . '</p>';
        echo '<p>Year: ' . $r['year'] .'</p>';
        echo '<p>Edition: ' . $r['edition'] .'</p>';
        echo '<p>______________________________________</p>';
      }


    ?>
  </body>
</html>
