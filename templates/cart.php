
zoznam knih v kosiku	


<?php
//global $booksInCart, $book;

if (empty($booksInCart)) {
	echo 'Kosik je prazdny';

} else {
	?>
	 <table>

        <tr>
          <th width="250px"> Nazov</th>
          <th width="250px">Popis</th>
          <th width="250px">Cena EUR</th>
          <th width="250px">Cena $</th>
        </tr>
        </table>
  <?php
	foreach ($booksInCart as $key=>$book) {
	?>
  <table>
	 <tr>
         <td width="200px"><b><a href="/book/<?= slug($book->title) ?>/<?=$key ?>"><?= $book->title ?></a></b></td>
          <td><?= $book->description ?></td>    
          <td><?= $book->price ?></td>
          <td><?= $book->priceInDolars ?></td>
      </tr>
      </table>
<?php
		//echo 'nazov: ' . $book->title;
		//echo 'Cena: ' . $book->price;

	
}// end of foreach z zatvara end of foreach z riadku 24
}//end of if z riadku 12

?>

<form action="/cart" method="post">
<input type="hidden" name="emptyCart" value="delete">
  <input type="submit" value="Vyprazdnit kosik">

</form>