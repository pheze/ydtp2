<?php 

require_once '../model/match.inc.php';
require_once '../model/reservation.inc.php';

function generate_vars($section, &$vars) {
    $vars['ok'] = false;
    $vars['full'] = false;

    if (!isset($_GET['match_id']) || !isset($_GET['nombre_billet'])) {
        return;
    }    
    
    $nombre_billet = $_GET['nombre_billet'];
    $match = Match::get($_GET['match_id']);

    if ($match == null || $nombre_billet <= 0) {
        return;
    }

    if ($match->places < $nombre_billet) {
        $vars['full'] = true;
        return;
    }


    $match->places = $match->places-$nombre_billet;
    $match->save();

    $reservation = new Reservation();
    $reservation->utilisateur = $vars['userid'];
    $reservation->match = $match->id;
    $reservation->qte = $nombre_billet;
    $reservation->expiration = time() + 3600;
    $reservation->save();

    $vars['ok'] = true;
}

?>