~:extend('base')~
~[content]~

~ if (!isset($match_id)) { ~
    Match inconnu.
 ~} else {~
    Detail du match: ~~ $match_id ~

    ~if ($is_logged) { ~
        <br><br>
        Achat de billet?: 
            <form action="index.php">
            <input type="hidden" name="section" value="confirmation_achat_billet">
            <input type="hidden" name="match_id" value="~~$match_id~">
            <input type="text" name='nombre_billet'></input>
        </form>
    ~}~

 ~}~

~[/content]~
