~:extend('base')~
~[content]~
    ~ if (!$is_logged) { ~
        Vous devez être identifié pour voir l'historique de vos achats.
    ~ } else { ~
        Id des achats..:<br>
        ~ foreach ($achats as $achat) { ~
            ~~$achat->id~ <br>
        ~ } ~
    ~ } ~
~[/content]~
