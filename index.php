<?php 

$articles = [
	[
		'title' => 'Article 1',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit',
		'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
		'isPublished' => true,
		'author' => 'David Robert',
		'publishedAt' => '2024/06/21'
	],
	[
		'title' => 'Article 2',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit',
		'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
		'isPublished' => false,
		'author' => "David Douillet"
	],
	[
		'title' => 'Article 3',
		'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit',
		'img' => "https://static.vecteezy.com/system/resources/thumbnails/009/926/551/small_2x/3d-blog-writer-working-on-article-character-illustration-png.png",
		'isPublished' => true,
		'author' => "David Trezeguet"
	]
];

// je créé une fonction nommée "isStringTooLong"
// cette fonction prend en parametre la chaine de caractères à vérifier
// nommée $stringToCheck
// ainsi que la longueur max qu'on accepte, nommée $maxLength

// cette fonction retourne un booléen : mb_strlen retourne un booléen
// ce qui veut dire quand quand j'appelle cette fonction
// je récupère un booléen
function isStringTooLong($stringToCheck, $maxLength) {
	return mb_strlen($stringToCheck, 'UTF-8') > $maxLength;
}

function shortenString($stringToShorten, $length) {
	return substr($stringToShorten, 0, $length);
}


echo "<body>";

	echo "<main>";

		foreach($articles as $article) {

			if ($article['isPublished']) {

				echo "<article>";

					echo "<h2>" . $article["title"] . "</h2>";

					echo "<img src=".$article["img"]." />";


					// check si la chaine de caractères est trop longue
					if (isStringTooLong($article["content"], 20)) {
						// raccourcie la chaine de caractère à 20 max
						echo "<p>" . shortenString($article["content"], 20) . "...</p>";
					} else {
						echo "<p>" . $article["content"] . "</p>";

					}

				echo "</article>";

			} else {
				echo "<h2>" . $article['title'] . ": n'est pas publié</h2>";
			}
		}

	echo "</main>";

echo "</body>";