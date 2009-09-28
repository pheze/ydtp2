~:extend('base')~
~[content]~

~ if (!$ok) { ~
Erreur lors de l'achat des billets.
~ } else { ~
Match id: ~~$match_id~<br>
Nombre billet: ~~$nombre_billet~<br>
Voulez-vous ajouter ces billets au panier d'achat ? 
<a href="index.php?section=reservation_billet&nombre_billet=~~$nombre_billet~&match_id=~~$match_id~">oui</a> 
<a href="index.php?section=match_detail&id=~~$match_id~">non</a>

~ } ~
~[/content]~
