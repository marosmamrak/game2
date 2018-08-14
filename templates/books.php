


       <?php
          require_once '../helpers/html.php';
          ?>
      <form action="/books" method="GET">
        <input type="text" name="search" value="<? $searchedValue?>" />
        <input type="submit" value="Hladaj" />


      </form>

       
      <table>

        <tr>
          <th width="250px"> Nazov</th>
          <th width="250px">Popis</th>
          <th width="250px">Cena EUR</th>
          <th width="250px">Cena $</th>
        </tr>
      <?php
      if ($books) {
        foreach ($books as $key=>$book) {
      
      ?>
      <tr>
          <td><a href="/book/<?= slug($book->title) ?>/<?= $key ?>"><?= $book->title ?></a></td>
          <td><?= $book->description ?></td>    
          <td><?= $book->price ?></td>
          <td><?= $book->priceInDolars ?></td>
      </tr>
      <?php
        }

        

        }else {
          echo 'No books found';
        }
?>
</table>