<?php 

require_once '../model/match.inc.php';
require_once '../model/reservation.inc.php';
require_once '../model/achat.inc.php';

function generate_vars($section, &$vars) {
    $vars['ok'] = false;

    if (!$vars['is_logged']) {
        return;
    }

    $reservations = Reservation::filter('utilisateur = ' . $vars['userid']);
    foreach ($reservations as $reservation) {
        $achat = new Achat(); 
        $achat->utilisateur = $reservation->utilisateur;
        $achat->match = $reservation->match;
        $achat->qte = $reservation->qte;
        $achat->date = time();
        $achat->save();

        $reservation->delete();
    }
        
    $vars['ok'] = true;

}

?>
