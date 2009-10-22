<?php 

require '../model/reservation.inc.php';
require '../model/achat.inc.php';


function generate_vars($section, &$vars) {
    if (!$vars['is_logged']) { return; } 
    

    if (isset($_GET['reservation_id'])) {
        $reservation = Reservation::get($_GET['reservation_id']);
        if ($reservation != null) {
            $match = $reservation->get_match();
            $match->places += $reservation->qte;
            $match->save();
            $reservation->delete();
        }
    } else if (isset($_GET['tout_effacer'])) {
        $reservations = Reservation::filter_by_user($vars['userid']);
        foreach ($reservations as $reservation) {
            $match = $reservation->get_match();
            $match->places += $reservation->qte;
            $match->save();
            $reservation->delete();
        }
    }

    $reservations = Reservation::filter_by_user($vars['userid']);
    $vars['reservations'] = $reservations;
}

?>
