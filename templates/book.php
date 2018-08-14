<p>nazov: <?=$book->title ?></p>
<p>Cena: <?= $book->price ?></p>


<form action="/cart" method="POST">

	<input type="hidden" name="idKnihy" value="<?= $book->id ?>" >
	<input type="submit" value="Vlozit do kosika" >
	</form>
	<br>
	<p><a href="/books"> Spat na zoznam knih</a></p>